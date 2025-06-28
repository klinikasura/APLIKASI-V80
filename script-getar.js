window.addEventListener("load", function (ev) {
    "use strict";
    var log = document.getElementById("log");
    if (navigator.vibrate) {
        log.textContent += "";
    }
    if (navigator.mozVibrate) {
        log.textContent += "";
    }
    if (navigator.webkitVibrate) {
        log.textContent += "";
    }
    log.textContent += "";

    
    document.getElementById("vib1").addEventListener("click", function () {
        navigator.vibrate(1200);
    }, false);
    document.getElementById("vib2").addEventListener("click", function () {
        navigator.vibrate([1000, 100, 500, 100, 300, 100, 100]);
    }, false);
    document.getElementById("vib3").addEventListener("click", function () {
        navigator.vibrate();
    }, false);
}, false);
