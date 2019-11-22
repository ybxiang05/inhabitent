(function($) {
  $(function() {
    // search field animation //
    $('.site-header .fa-search').click(function() {
      if (!$('.site-header .fa-search').hasClass('search-open')) {
        $('.site-header .search-field')
          .animate(
            {
              width: 'toggle'
            },
            750
          )
          .focus()
          .addClass('search-open');
      }
    });
    $('.site-header .search-field').blur(function() {
      if (!this.value) {
        $('.site-header .search-field')
          .animate(
            {
              width: 'toggle'
            },
            750
          )
          .removeClass('search-open');
      }
    });

    // scroll sticky nav //
    $(window).bind('scroll', function() {
      if ($(window).scrollTop() > window.innerHeight) {
        $('.main-navigation').addClass('sticky');
      } else {
        $('.main-navigation').removeClass('sticky');
      }
    });
  }); //end of doc ready
})(jQuery);
