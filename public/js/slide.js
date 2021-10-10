var slide = 1;
var cont = 2;

function loopSlider() {
    var xx = setInterval(function () {
        if (slide == 3) {
            cont = 1;
        }

        $("#slide" + slide).fadeOut(400);
        $("#slide" + cont)
            .delay(400)
            .fadeIn(400);

        slide++;
        cont++;

        if (slide > 3) {
            slide = 1;
            cont = 2;
        }
    }, 5000);
}

function reinitLoop(time) {
    clearInterval(xx);
    setTimeout(loopSlider(), time);
}

$(window).ready(function () {
    $("#slide2").hide();
    $("#slide3").hide();

    loopSlider();
});
