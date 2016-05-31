$(document).ready(function() {
    function setHeight() {
        slideHeight = $(window).innerHeight() - 70;
        $('.slide-page').css('min-height', slideHeight);
    };
    setHeight();

    $(window).resize(function() {
        setHeight();
    });
});
