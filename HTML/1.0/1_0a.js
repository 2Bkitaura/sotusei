// (function($) {
//   var $body   = $('body');
//   var $btn   = $('.toggle_btn');
//   var $mask  = $('#mask');
//   var open   = 'open'; // class
//   // menu open close
//   $btn.on( 'click', function() {
//     if ( ! $body.hasClass( open ) ) {
//       $body.addClass( open );
//     } else {
//       $body.removeClass( open );
//     }
//   });
//   //mask close
//   $mask.on('click', function() {
//     $body.removeClass( open );
//   });
// } )(jQuery);

$(function () {
  var $nav = $('#navArea');
  var $btn = $('.toggle_btn');
  var $mask = $('#mask');
  var open = 'open'; // class
  // menu open close
  $btn.on('click', function () {
    if (!$nav.hasClass(open)) {
      $nav.addClass(open);
    } else {
      $nav.removeClass(open);
    }
  });
  // mask close
  $mask.on('click', function () {
    $nav.removeClass(open);
  });
})