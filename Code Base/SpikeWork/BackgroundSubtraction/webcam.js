(function (doc, nav) {
  "use strict";

  var video, width, height, context;
  var bufidx = 0, buffers = [];
  var buffsize=20;
  var thresholdsize = 20;

  function initialize() {
    // createVideo video.
    video = doc.getElementById("v");
    width = video.width;
    height = video.height;



    // The target canvas.
    var canvas = doc.getElementById("c");
    context = canvas.getContext("2d");

    // Prepare buffers to store video data.
    for (var i = 0; i < buffsize; i++) { //
      buffers.push(new Uint8Array(width * height));
    }

    // Get the webcam's stream.
    nav.getUserMedia({video: true}, startStream, function () {});
  }

  function startStream(stream) {
    video.src = URL.createObjectURL(stream);
    video.play();

    // Ready! Let's start drawing.
    requestAnimationFrame(draw);
  }

  function bufferUpdate(bufferval) {
    buffsize = bufferval;
    doc.querySelector('#buffer').value = bufferval;
    console.log(bufferval);
}

  function draw() {
    var frame = readFrame();

    if (frame) {
      markLightnessChanges(frame.data);
      context.putImageData(frame, 0, 0);
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

  function markLightnessChanges(data) {
    // Pick the next buffer (round-robin).
    var buffer = buffers[bufidx++ % buffers.length];

    for (var i = 0, j = 0; i < buffer.length; i++, j += 4) {
      // Determine lightness value.
      var current = lightnessValue(data[j], data[j + 1], data[j + 2]);

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
    return buffers.some(function (buffer) {
      return Math.abs(value - buffer[index]) >= thresholdsize;
    });
  }

  function lightnessValue(r, g, b) {
    return (Math.min(r, g, b) + Math.max(r, g, b)) / 255 * 50;
  }

  addEventListener("DOMContentLoaded", initialize);
})(document, navigator);