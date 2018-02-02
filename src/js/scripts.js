(function ($, window, document, undefined) {

  'use strict';

  $(function () {

    // Change Date
    $( ".post-cont" ).scroll(function() {
      $('.post').each(function() {
        var postTop = $(this).offset().top;
        var postBottom = $(this).offset().top + ($(this).height() * 1.5 );
        var postDate = $(this).attr("data-date");

        if ( $( ".post-cont" ).scrollTop() >= postTop
          && $( ".post-cont" ).scrollTop() <= postBottom ) {
            $('h1').html(postDate);
        }
      });
    });

  });

})(jQuery, window, document);
