(function (doc, nav) {
  "use strict";

  var video, width, height, context;
  var bufidx = 0, bufferArray = [];
  var buffsize=10;
  var thresholdsize = 10;

  function initialize() {
    // createVideo video.
    video = doc.getElementById("v");
    width = video.width;
    height = video.height;


    // The target canvas.
    var canvas = doc.getElementById("c");
    context = canvas.getContext("2d");

    bufferPrepare(buffsize);


    // Get the webcam's stream.
    nav.getUserMedia({video: true}, startStream, function () {});

    var gui = new dat.gui.GUI();


    // GUI editor object
    var obj = {
	  buffer: buffsize,
	  threshold: thresholdsize
    };




    // Number field with slider
    gui.add(obj, "buffer").min(1).max(40).step(1).onChange(function(newValue) {
      bufferPrepare(newValue);
      console.log("buffer size" + bufferArray.length);
    });


    // Number field with slider
    gui.add(obj, "threshold").min(1).max(30).step(1).onChange(function(newValue) {
      thresholdsize = newValue;
    });

  }

  function startStream(stream) {
    video.src = URL.createObjectURL(stream);
    video.play();

    //draw frames
    requestAnimationFrame(draw);
  }
  // Prepare bufferArray to store video data.
  function bufferPrepare(bufferval) {
    bufferArray = [];
    for (var i = 0; i < bufferval; i++) { //
      bufferArray.push(new Uint8Array(width * height));
    }
}

  function draw() {
    var frame = readFrame(); //read frame from video
    if (frame) {
      measureLightChanges(frame.data); //if videofeed is available, measure changes
      context.putImageData(frame, 0, 0); //put details in
    }

    // Wait for the next frame.
    requestAnimationFrame(draw);
  }

  function readFrame() {
    try {
      context.drawImage(video, 0, 0, width, height);
    } catch (e) {
      // The video may not be ready, yet.
      return null;
    }

    return context.getImageData(0, 0, width, height);
  }

  function measureLightChanges(data) {
    // Pick the next buffer (round-robin).
    var buffer = bufferArray[bufidx++ % bufferArray.length];

    for (var i = 0, j = 0; i < buffer.length; i++, j += 4) {
      // Determine lightness value.
      var current = greyScale(data[j], data[j + 1], data[j + 2]);


      // Set color to black.
      data[j] = data[j + 1] = data[j + 2] = 0;

      // Full opacity for changes.
      data[j + 3] = 255 * lightnessHasChanged(i, current);

      // Store current lightness value.
      buffer[i] = current;
    }
  }
//threshold for change in the system
  function lightnessHasChanged(index, value) {
    return bufferArray.some(function (buffer) {
      return Math.abs(value - buffer[index]) >= thresholdsize;
    });
  }

  function greyScale(r, g, b) {
    return (Math.min(r, g, b) + Math.max(r, g, b)) / 255 * 50;
  }

  addEventListener("DOMContentLoaded", initialize);
})(document, navigator);