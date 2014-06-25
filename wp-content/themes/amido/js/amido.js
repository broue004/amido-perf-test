AMIDO = typeof (AMIDO) == 'undefined' ? {} : AMIDO;

AMIDO.Web = function($) {
    AMIDO.Web.Weather = function() {
        var init = function() {
            $(".toggle-weather").on('click', function() {
                $(".toggle-weather, .temperature-info").toggle();
            });
        }

        return {
            init: init
        }
    };

    AMIDO.Web.Profiles = function() {
        if($('body').hasClass('post-type-archive-team'))
        {
            $('.read-profile, a.photo').on('click', function(e) {

                var infoContainer = $(this).siblings(".info").html();
                // Hide any profiles already open
                $('.team-profile').hide();
                var teamInfo = $(e.target).parents('.team-info');
                var teamProfile = $(teamInfo).first().next('.team-profile');
                teamProfile.show().html('<div>' + infoContainer + '</div>');
                $('html, body').animate({
                    scrollTop: $(teamProfile).offset().top
                }, 400);
                e.preventDefault();
            })
        }
    };
    var init = function() {
        AMIDO.Web.Profiles();
        AMIDO.Web.Weather().init();
    };
    return {
        init: init
    }
}

jQuery(function($) {
    var web = new AMIDO.Web($);
    web.init();
});
