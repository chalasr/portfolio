(function(app) {

    function MainCtrl($rootScope) {
        $rootScope.javascriptLoaded = false;
        $rootScope.loadJavascripts = function() {
            $("a[href^=#]").click(function() {
                var cible, hauteur;
                cible = $(this).attr("href");
                cible = cible.substr(1, cible.length - 1);
                hauteur = $("a[name=" + cible + "]").offset().top;
                $("html,body").animate({
                    scrollTop: hauteur
                }, 1000);
                return false;
            });
            if($(document).scrollTop() < 195) {
                $(".menu-fixed").hide();
                $(".right").hide();
            }
            window.onscroll = function() {
                if($(document).width() <= 1650) {
                    if($(document).scrollTop() > 195) {
                        $('.menu-fixed').fadeIn();
                    } else {
                        $(".menu-fixed").fadeOut();
                    }
                }else if($(document).width() >= 1650) {
                    if($(document).scrollTop() > 195) {
                        $('.right').fadeIn();
                    }else {
                        $(".right").fadeOut();
                    }
                }
                if($(document).scrollTop() <= 630) {
                    $(".right a").removeClass("hovermenu");
                    $("#topanch").addClass("hovermenu");
                    $(".menu-fixed a").removeClass("hoverfixed");
                    $("#topanch-fixed").addClass("hoverfixed");
                }else if ($(document).scrollTop() >= 630 && $(document).scrollTop() <= 1260) {
                    $(".right a").removeClass("hovermenu");
                    $("#companch").toggleClass("hovermenu");
                    $(".menu-fixed a").removeClass("hoverfixed");
                    $("#companch-fixed").addClass("hoverfixed");
                }else if ($(document).scrollTop() >= 1260 && $(document).scrollTop() <= 2430) {
                    $(".right a").removeClass("hovermenu");
                    $("#travanch").toggleClass("hovermenu");
                    $(".menu-fixed a").removeClass("hoverfixed");
                    $("#travanch-fixed").addClass("hoverfixed");
                }else if ($(document).scrollTop() >= 2430) {
                    $(".right a").removeClass("hovermenu");
                    $("#contanch").toggleClass("hovermenu")
                    $(".menu-fixed a").removeClass("hoverfixed");
                    $("#contanch-fixed").addClass("hoverfixed");;
                }
            };
            $('.devicons-javascript').click(function() {
                toast('Javascript', 3000)
            });
            $('.devicons-nodejs_small').click(function() {
                toast('NodeJS', 3000)
            });
            $('.devicons-angular').click(function() {
                toast('AngularJS', 3000)
            });
            $('.devicons-laravel').click(function() {
                toast('Laravel', 3000)
            });
            $('.devicons-chrome').click(function() {
                toast('Google Maps API', 3000)
            });
            $('.devicons-symfony').click(function() {
                toast('Symfony', 3000)
            });
            $('.devicons-python').click(function() {
                toast('Python', 3000)
            });
            $('.timeline-panel').hover(
                function() {
                    $(this).find('.caption').slideDown(250);
                },
                function() {
                    $(this).find('.caption').slideUp(250);
                }
            );
            $('input, textarea').on('focus', function() {
                $('label[for='+ $(this).attr('id') +']').addClass('active');
            });
            $('input, textarea').on('blur', function() {
                $('label[for='+ $(this).attr('id') +']').removeClass('active');
            });
        };
    };

    app.controller('MainCtrl', MainCtrl);

})(angular.module('portfolio'));
