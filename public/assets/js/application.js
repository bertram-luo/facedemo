var App= {
    init: function(){
        $(".docs-top").length && (App._backToTopButton(),
                                  $(window).on("scroll", App._backToTopButton))
    },
    _backToTopButton: function(){
        $(window).scrollTop() > 500 ? $(".docs-top").fadeIn() : $(".docs-top").fadeOut()
    }
};
App.init();

