(function() {
  $(function() {
    var url;
    url = window.location.pathname;
    console.log(url);
    return $('nav a').each(function() {
      if ($(this).attr('href') === url) {
        return $(this).addClass('active');
      } else {
        return $('#nav li').first(function() {
          return a.addClass('active');
        });
      }
    });
  });

  $(function() {
    var head, link, logo;
    head = $('header');
    logo = $('#logo img');
    link = $('nav li').children();
    return $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        return head.addClass('fill');
      } else {
        return head.removeClass('fill');
      }
    });
  });

  $(function() {
    return $('header .btn').click(function(e) {
      $('#menuResp').slideToggle();
      return console.log('waluh');
    });
  });

  $(function() {
    return $('#respToggle').click(function(e) {
      $('#respToggle i').fadeToggle();
      return $('#menuResp').fadeToggle();
    });
  });

  $(function() {
    $('nav li a[href*=#]').click(function(e) {
      var target;
      $('#menuResp').slideUp();
      $('#respToggle i').fadeToggle();
      e.preventDefault();
      target = void 0;
      if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
        target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top - 90
          }, 1000);
          false;
        }
      }
      if ($(this).attr('href') === '#home') {
        $('html,body').animate({
          scrollTop: 0
        }, 1000);
        return false;
      }
    });
  });

  $(window).scroll(function() {
    if ($(this).scrollTop()) {
      return $("#toTop").fadeIn();
    } else {
      return $("#toTop").fadeOut();
    }
  });

  $("#toTop").click(function() {
    return $("html, body").animate({
      scrollTop: 0
    }, 1000);
  });

}).call(this);