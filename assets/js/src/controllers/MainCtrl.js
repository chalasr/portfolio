(function(app) {

    function MainCtrl($rootScope) {
        var self = this;
        self.javascriptLoaded = false;
        self.showModal = false;

        this.openModal = function() {
            self.showModal = true;
            $('#profileModal').modal('show');
            $(".modal-backdrop").on('click', function() {
                 console.log('close modal');
                 self.closeModal();
            });
            console.log('show modal');
        };

        this.closeModal = function() {
            self.showModal = false;
            $('#profileModal').modal('hide');
        };

        this.loadJavascripts = function() {
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
            if ($(document).scrollTop() < 195) {
                $(".menu-fixed").hide();
                $(".right").hide();
            }
            window.onscroll = function() {
                if ($(document).width() <= 1650) {
                    if ($(document).scrollTop() > 195) {
                        $('.menu-fixed').fadeIn();
                    } else {
                        $(".menu-fixed").fadeOut();
                    }
                } else if ($(document).width() >= 1650) {
                    if ($(document).scrollTop() > 195) {
                        $('.right').fadeIn();
                    } else {
                        $(".right").fadeOut();
                    }
                }
                if ($(document).scrollTop() <= 630) {
                    $(".right a").removeClass("hovermenu");
                    $("#topanch").addClass("hovermenu");
                    $(".menu-fixed a").removeClass("hoverfixed");
                    $("#topanch-fixed").addClass("hoverfixed");
                } else if ($(document).scrollTop() >= 630 && $(document).scrollTop() <= 1260) {
                    $(".right a").removeClass("hovermenu");
                    $("#companch").toggleClass("hovermenu");
                    $(".menu-fixed a").removeClass("hoverfixed");
                    $("#companch-fixed").addClass("hoverfixed");
                } else if ($(document).scrollTop() >= 1260 && $(document).scrollTop() <= 2430) {
                    $(".right a").removeClass("hovermenu");
                    $("#travanch").toggleClass("hovermenu");
                    $(".menu-fixed a").removeClass("hoverfixed");
                    $("#travanch-fixed").addClass("hoverfixed");
                } else if ($(document).scrollTop() >= 2430) {
                    $(".right a").removeClass("hovermenu");
                    $("#contanch").toggleClass("hovermenu")
                    $(".menu-fixed a").removeClass("hoverfixed");
                    $("#contanch-fixed").addClass("hoverfixed");;
                }
            };
            $('.devicons').click(function() {
                var classes = $(this).attr('class');
                var classname = classes.split('devicons ')[1];
                toast(self.getToolByClassName(classname), 3000);
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
            console.log('javascripts loaded');
        };

        this.getToolByClassName = function(str) {
            var classname = str.split('devicons-')[1];
            if (classname.indexOf('_') > -1) {
              classname = classname.split('_')[0];
            }
            return self.ucFirst(classname);
        };

        this.ucFirst = function(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        };

        $rootScope.status = 'ready';
    };

    app.controller('MainCtrl', MainCtrl);

})(angular.module('portfolio'));
