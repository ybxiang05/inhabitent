(function($) {
  $(function() {
    //variables for search in header //
    const $headerSearch = $('.site-header .fa-search');
    const $headerSearchField = $('.site-header .search-field');
    //functions for search header event listener//
    $headerSearch.click(triggerSearch);
    $headerSearchField.blur(blurSearch);

    // function for sticky nav event listener //
    $(window).bind('scroll', stickyNav);

    // search header functions //
    function triggerSearch() {
      if (!$headerSearch.hasClass('search-open')) {
        $headerSearchField
          .animate(
            {
              width: 'toggle'
            },
            750
          )
          .focus()
          .addClass('search-open');
      }
    }

    function blurSearch() {
      if (!this.value) {
        $headerSearchField
          .animate(
            {
              width: 'toggle'
            },
            750
          )
          .removeClass('search-open');
      }
    }

    //function sticky nav//

    function stickyNav() {
      if ($(window).scrollTop() > window.innerHeight) {
        $('.main-navigation').addClass('sticky');
      } else {
        $('.main-navigation').removeClass('sticky');
      }
    }
  }); //end of doc ready
})(jQuery);
