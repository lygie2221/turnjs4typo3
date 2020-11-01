document.addEventListener("DOMContentLoaded", function() {


    var width = $('#flipbook').parent().width() - 10;
    var height = (width / 3) * 2;

    try {
        var settings = JSON.parse(document.getElementById('turnjs_setting').innerHTML);
    }
    catch (e){
        var settings = false;
    }
    try {
        var autosize = JSON.parse(document.getElementById('turnjs_autosize').innerHTML);
    }
    catch (e){
        var autosize = false;
    }
    if(settings){
        if(autosize){
            settings.width=width;
            settings.height=height;
        }
        $("#flipbook").turn(settings);
    }
    else {
        $("#flipbook").turn({
            width: width,
            height: height,
            autoCenter: true
        });
    }


    $("#prevBtn").click(function () {
        $("#flipbook").turn("previous");
    });

    $("#nextBtn").click(function () {
        $("#flipbook").turn("next");
    });
});
