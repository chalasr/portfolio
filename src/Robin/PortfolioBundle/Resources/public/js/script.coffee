jQuery().ready ->
  $("a[href^=#]").click ->
    cible = $(this).attr("href")
    cible = cible.substr(1, (cible.length - 1))
    hauteur = $("a[name=" + cible + "]").offset().top
    $("html,body").animate
      scrollTop: hauteur
    , 1000
    false

  window.onscroll = ->
    (if $(document).scrollTop() > 195 then $(".right").fadeIn() else $(".right").fadeOut())
    if $(document).scrollTop() <= 630
      $(".right a").removeClass "hovermenu"
      $("#topanch").addClass "hovermenu"
    else if $(document).scrollTop() >= 630
      $(".right a").removeClass "hovermenu"
      $("#companch").toggleClass "hovermenu"
    return

  return

