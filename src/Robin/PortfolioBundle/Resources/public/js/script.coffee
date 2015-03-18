(->
  jQuery().ready ->
    $('a[href^=#]').click ->
      cible = <undefined></undefined>
      hauteur = undefined
      cible = $(this).attr('href')
      cible = cible.substr(1, cible.length - 1)
      hauteur = $('a[name=' + cible + ']').offset().top
      $('html,body').animate { scrollTop: hauteur }, 1000
      false
    if $(document).scrollTop() < 195
      $('.menu-fixed').hide()
      $('.right').hide()

    window.onscroll = ->
      if $(document).width() <= 1650
        if $(document).scrollTop() > 195
          $('.menu-fixed').fadeIn()
        else
            $('.menu-fixed').fadeOut()
      else if $(document).width() >= 1650
        if $(document).scrollTop() > 195
          $('.right').fadeIn()
        else
          $('.right').fadeOut()
      if $(document).scrollTop() <= 630
        $('.right a').removeClass 'hovermenu'
        $('#topanch').addClass 'hovermenu'
        $('.menu-fixed a').removeClass 'hoverfixed'
        $('#topanch-fixed').addClass 'hoverfixed'
      else if $(document).scrollTop() >= 630 and $(document).scrollTop() <= 1260
        $('.right a').removeClass 'hovermenu'
        $('#companch').toggleClass 'hovermenu'
        $('.menu-fixed a').removeClass 'hoverfixed'
        $('#companch-fixed').addClass 'hoverfixed'
      else if $(document).scrollTop() >= 1260 and $(document).scrollTop() <= 2430
        $('.right a').removeClass 'hovermenu'
        $('#travanch').toggleClass 'hovermenu'
        $('.menu-fixed a').removeClass 'hoverfixed'
        $('#travanch-fixed').addClass 'hoverfixed'
      else if $(document).scrollTop() >= 2430
        $('.right a').removeClass 'hovermenu'
        $('#contanch').toggleClass 'hovermenu'
        $('.menu-fixed a').removeClass 'hoverfixed'
        $('#contanch-fixed').addClass 'hoverfixed'
      return

    $('.devicons-javascript').click ->
      toast 'Javascript', 3000
      return
    $('.devicons-nodejs_small').click ->
      toast 'NodeJS', 3000
      return
    $('.devicons-angular').click ->
      toast 'AngularJS', 3000
      return
    $('.devicons-laravel').click ->
      toast 'Laravel', 3000
      return
    $('.devicons-chrome').click ->
      toast 'Google Maps API', 3000
      return
    $('.timeline-panel').hover (->
      $(this).find('.caption').slideDown 250
      return
    ), ->
      $(this).find('.caption').slideUp 250
      return
    return
  return
).call this
