$(document).ready(function() {
    function setHeight() {
        windowHeight = $(window).innerHeight();
        $('.article').css('min-height', windowHeight);
    };
    setHeight();

    $(window).resize(function() {
        setHeight();
    });
});
