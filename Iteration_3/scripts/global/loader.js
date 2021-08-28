$(window).on("load", function() {
    $("body").css("overflow", "hidden");
    setTimeout(function () {
        $(".loader-wrapper").fadeOut("slow");
        $("body").css("overflow", "");
    }, Math.floor(Math.random() * (720 - 128) + 128));
});