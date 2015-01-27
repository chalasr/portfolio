(function() {
    jQuery().ready(function() {
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
        window.onscroll = function() {
            if ($(document).scrollTop() > 195) {
                $(".right").fadeIn();
            } else {
                $(".right").fadeOut();
            }
            if ($(document).scrollTop() <= 630) {
                $(".right a").removeClass("hovermenu");
                $("#topanch").addClass("hovermenu");
            } else if ($(document).scrollTop() >= 630 && $(document).scrollTop() <= 1260) {
                $(".right a").removeClass("hovermenu");
                $("#companch").toggleClass("hovermenu");
            } else if ($(document).scrollTop() >= 1260) {
                $(".right a").removeClass("hovermenu");
                $("#travanch").toggleClass("hovermenu");
            }
        };
    });

}).call(this);
