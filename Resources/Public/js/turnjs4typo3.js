document.addEventListener("DOMContentLoaded", function() {


    var width = $('#flipbook').parent().width() - 10;
    if (width < 600) {
        //width=width/2;
    }

    var height = (width / 3) * 2;


    $("#flipbook").turn({
        width: width,
        height: height,
        autoCenter: true
    });


    $("#prevBtn").click(function () {
        $("#flipbook").turn("previous");
    });

    $("#nextBtn").click(function () {
        $("#flipbook").turn("next");
    });
});
