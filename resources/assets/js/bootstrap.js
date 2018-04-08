
window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

 try {
  window.$ = window.jQuery = require('jquery');
  require('bootstrap-sass');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

 window.axios = require('axios');

 window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

 let token = document.head.querySelector('meta[name="csrf-token"]');

 if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

//customer



// //Custom

// var CURRENT_URL = window.location.href.split('#')[0].split('?')[0],
// $BODY = $('body'),
// $MENU_TOGGLE = $('#menu_toggle'),
// $SIDEBAR_MENU = $('#sidebar-menu'),
// $SIDEBAR_FOOTER = $('.sidebar-footer'),
// $LEFT_COL = $('.left_col'),
// $RIGHT_COL = $('.right_col'),
// $NAV_MENU = $('.nav_menu'),
// $FOOTER = $('footer');
// $SITE_TITLE = $('#site_title');
// $width_desktop = 1200;
// $width_mobile_nimi = 745;
// // Sidebar
// $(document).ready(function() {

//     // TODO: This is some kind of easy fix, maybe we can improve this
//     var setContentHeight = function () {
//         // reset height
//         $RIGHT_COL.css('min-height', $(window).height());

//         var bodyHeight = $BODY.outerHeight(),
//         footerHeight = $BODY.hasClass('footer_fixed') ? -10 : $FOOTER.height(),
//         leftColHeight = $LEFT_COL.eq(1).height() + $SIDEBAR_FOOTER.height(),
//         contentHeight = bodyHeight < leftColHeight ? leftColHeight : bodyHeight;
//         // normalize content
//         contentHeight -= $NAV_MENU.height() + footerHeight;

//         $RIGHT_COL.css('min-height', contentHeight);
//         fixedLayoutWidth();

//       };

//           //Fixed Header
//           var position_right ='fixed';
//           var position_right_scroll ='absolute';
//           if ($(window).width() >= $width_desktop) {
//            position_right ='fixed';
//          }else{
//            position_right = position_right_scroll;
//          }
//          $(".top_nav").css('z-index','999');
//          $(".top_nav").css('position',position_right);
//          //Fixed Content Center
//          $(".right_col").css("cssText", "padding-top: 65px !important;");
//          $(".right_col").css('position',position_right);
//          fixedLayoutWidth();

//          $(window).resize(function(event) {
//           event.preventDefault();
//           if ($(window).width() >= 1200) {
//            position_right ='fixed';
//          }else{
//            position_right = position_right_scroll;
//          }
//          $(".top_nav").css('position',position_right);
//          $(".right_col").css('position',position_right);
//          fixedLayoutWidth();
//        });

//          function fixedLayoutWidth(){
//          $(".top_nav").css('width', '100%');
//           if ($BODY.hasClass('nav-sm')) {
//          //  $(".top_nav").css('width', $(window).width()-70);
//            $(".right_col").css('width', $(window).width()-70);
//          }else{
//          // $(".top_nav").css('width', $(window).width()-230);
//           $(".right_col").css('width', $(window).width()-70);
//           $width = $(window).width();
//           if ($width < mobile_width) {
//           //  $(".top_nav").css('width', $(window).width());
//             $(".right_col").css('width', $(window).width());

//           }
//         }
//       }






//       $SIDEBAR_MENU.find('a').on('click', function(ev) {
//         var $li = $(this).parent();

//         if ($li.is('.active')) {
//           $li.removeClass('active active-sm');
//           $('ul:first', $li).slideUp(function() {
//             setContentHeight();
//           });
//         } else {
//             // prevent closing menu if we are on child menu
//             if (!$li.parent().is('.child_menu')) {
//               $SIDEBAR_MENU.find('li').removeClass('active active-sm');
//               $SIDEBAR_MENU.find('li ul').slideUp();
//             }
            
//             $li.addClass('active');

//             $('ul:first', $li).slideDown(function() {
//               setContentHeight();
//             });
//           }
//         });

//     // toggle small or large menu
//     $MENU_TOGGLE.on('click', function() {

//       menutoggle();

//     });

//     menutoggle();



//     $position_layout_count = 0;
//     $position_layout_name = '';
//     $(document).on('mouseover', '.left_col', function (event) {

//       if (event.type === "mouseover") {
//        if ($position_layout_count != 0 && $position_layout_name !='left_col') {
//          $position_layout_count = 0;

//        }else{

//          menu_mouse('left_col');
//        }
//        $position_layout_count++;
//        $position_layout_name ="right_col";

//      } 
//    });
//     $(document).on('mouseover', '.right_col', function (event) {

//       if (event.type === "mouseover") {
//         if ($position_layout_count != 0 && $position_layout_name !='right_col') {
//          $position_layout_count = 0;

//        }else{
//          $("body").addClass('nav-md').removeClass('nav-sm');
//          menu_mouse('right_col');
//        }
//        $position_layout_count++;
//        $position_layout_name ="left_col";

//      } 
//    });
//     var mobile_width = 992;
//     function menu_mouse(type){
//       $width = $(window).width();
//       if ($width > mobile_width) {
//         menutoggle();
//       }else{
//          //   console.log('mobile');
//          $("body").addClass('nav-sm').removeClass('nav-md');
//        }


//      }

//  function menutoggle() {
//     if ($BODY.hasClass('nav-md')) {
//       $SIDEBAR_MENU.find('li.active ul').hide();
//       $SIDEBAR_MENU.find('li.active').addClass('active-sm').removeClass('active');

//       // $SITE_TITLE.css("width", "70");
//       // $SIDEBAR_FOOTER.css("width", "70");
//       // $SITE_TITLE.animate({ width: 70 }, 100);
//       //  $SIDEBAR_FOOTER.animate({ width: 70 }, 100);
//       $SIDEBAR_FOOTER.addClass('sidebar-footer-mobile');
//       $SIDEBAR_FOOTER.find('a').addClass('mobile');
//       $SIDEBAR_MENU.addClass('scroll');
//       // $SIDEBAR_MENU.css("width", "70");

//       $SITE_TITLE.animate({
//         width: "70"
//       }, 600, function () {
//         // Animation complete.
//       });
//       $SIDEBAR_FOOTER.animate({
//         width: "70"
//       }, 600, function () {
//         // Animation complete.
//       });
//       $SIDEBAR_MENU.animate({
//         width: "70",
//         background: '#4D4D4D;'
//       }, 600, function () {
//         // Animation complete.
//       });

//       $('.header-page').animate({
//         marginLeft: "85"
//       }, 600, function () {
//         // Animation complete.
//       });
//       $('.side-menu').animate({
//         width: "70"
//       }, 600, function () {
//         // Animation complete.
//       });
//       $(".menu-hidden-small").css('display', 'none');
//       $(".menu-icon").animate({ marginLeft: '0' }, 470, function () {
//         $(this).css('text-align', 'center');
//       });
//     } else {
//       $SIDEBAR_MENU.find('li.active-sm ul').show();
//       $SIDEBAR_MENU.find('li.active-sm').addClass('active').removeClass('active-sm');
//       // $SITE_TITLE.css("width", "230");
//       // $SIDEBAR_FOOTER.css("width", "230");
//       $SIDEBAR_FOOTER.removeClass('sidebar-footer-mobile');
//       $SIDEBAR_FOOTER.find('a').removeClass('mobile');
//       $SIDEBAR_MENU.addClass('scroll');
//       // $SIDEBAR_MENU.css("width", "230");
//       $SITE_TITLE.animate({
//         width: "230"
//       }, 400, function () {
//         // Animation complete.
//       });
//       $SIDEBAR_FOOTER.animate({
//         width: "230"
//       }, 400, function () {
//         // Animation complete.
//       });
//       $SIDEBAR_MENU.animate({
//         width: "230",
//         background: '#4D4D4D;'
//       }, 400, function () {
//         // Animation complete.
//       });
//       $('.header-page').animate({
//         marginLeft: "240"
//       }, 400, function () {
//         // Animation complete.
//       });
//       $('.side-menu').animate({
//         width: "230"
//       }, 400, function () {
//         // Animation complete.
//       });
//       $(".menu-hidden-small").delay(300).fadeIn();
//       $(".menu-icon").css('text-align', 'right');
//     }

//     $BODY.toggleClass('nav-md nav-sm');

//     setContentHeight();

//     $('.dataTable').each ( function () { $(this).dataTable().fnDraw(); });

//   }

//     // check active menu
//     $SIDEBAR_MENU.find('a[href="' + CURRENT_URL + '"]').parent('li').addClass('current-page');

//     $SIDEBAR_MENU.find('a').filter(function () {
//       return this.href == CURRENT_URL;
//     }).parent('li').addClass('current-page').parents('ul').slideDown(function() {
//       setContentHeight();
//     }).parent().addClass('active');

//     // recompute content when resizing
//     $(window).resize(function(){  
//       setContentHeight();
//     });

//     setContentHeight();


//   });



$(document).ready(function(){

  //change lang
  $( ".change-lang" ).click(function() {
   $lang = $(this).data('lang');
   $langcurrent = $(this).data('langcurrent');
   if ($langcurrent != "1") { 
     $('#lang_current').val($lang);
     if ($lang =='en') {
      $('body').css("font-family", 'KanitLight');
      $('#container').css("font-family", 'KanitLight');
      $('#lang_image_display_current').attr('src',$('#lang_en_image_url').val());
      $('#lang_image_display_one').attr('src',$('#lang_th_image_url').val());
      $('#lang_a_display_current').data('lang','en');
      $('#lang_a_display_one').data('lang','th');
      $('#lang_display_a_current').find('span.lang').html('EN');
      $('#lang_a_display_one').find('span.lang').html('TH');
    }else{
      $('body').css("font-family", 'KanitLight');
      $('#container').css("font-family", 'KanitLight');
      $('#lang_image_display_one').attr('src',$('#lang_en_image_url').val());
      $('#lang_image_display_current').attr('src',$('#lang_th_image_url').val());
      $('#lang_a_display_current').data('lang','th');
      $('#lang_a_display_one').data('lang','en');
      $('#lang_display_a_current').find('span.lang').html('TH');
      $('#lang_a_display_one').find('span.lang').html('EN');
    }
  }

});
});



// $(document).ready(function(){
//   $heightRate =10;
//   $heightRateTopButtom =20;
//   $widthRate =280;
//   //center
//   $height = $(window).height()-75;
//   $('.content-center').css('height',$height);
//   //Modul
//   $height = $(window).height()-40;
//   $('.modal').css('max-height',$height);
//   $('.modal-body').css('max-height',$height-215);
//     ///right_col content-left
//     $right_col = $('.right_col').width();
//     $('.content-left').width($right_col-$widthRate);
//     $('.content-right').width($widthRate);
//   ////right sidebar scrollbar right
//   if ($('.content-center-right').length > 0) { 
//     $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
//     $('.content-center-right').css('height',$height-$heightRate );
//   }
//   ////right sidebar scrollbar right Top - Buttom
//   if ($('.content-center-right-top').length > 0) { 
//     $height = $(window).height() - $('.content-center-right-top').offset().top - $(window).scrollTop();
//     $('.content-center-right-top').css('height',($height-$heightRateTopButtom)/2 );
//     $('.content-center-right-botton').css('height',($height-$heightRateTopButtom)/2 );
//   }
//   $(window).resize(function(event) {
//     event.preventDefault();
//         ///right_col content-left
//         $right_col = $('.right_col').width();
//         $('.content-left').width($right_col-$widthRate);
//         $('.content-right').width($widthRate);
//       //center
//       $height = $(window).height()-75;
//       $('.content-center').css('height',$height);
//      //Modul
//      $height = $(window).height()-40;
//      $('.modal').css('max-height',$height);
//      $('.modal-body').css('max-height',$height-215);
//       ////right sidebar scrollbar right
//       if ($('.content-center-right').length > 0) { 
//         $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
//         $('.content-center-right').css('height',$height-$heightRate );
//       }
//   ////right sidebar scrollbar right Top - Buttom
//   if ($('.content-center-right-top').length > 0) { 
//     $height = $(window).height() - $('.content-center-right-top').offset().top - $(window).scrollTop();
//     $('.content-center-right-top').css('height',($height-$heightRateTopButtom)/2 );
//     $('.content-center-right-botton').css('height',($height-$heightRateTopButtom)/2 );
//   }
// });

// });

$(document).ready(function(){

//  datetimepicker
$('.top-datetimepicker').datetimepicker({
  viewMode: 'days',
  format: 'DD/MM/YYYY'
});
// icheck
$('.iCheck').iCheck({
  checkboxClass: 'icheckbox_minimal-grey',
  radioClass: 'iradio_minimal-grey',
    increaseArea: '20%' // optional
  });
$(".switchCheck").iosCheckbox();

$('select').addClass('selectpicker');
$('.selectpicker').selectpicker();


$('.dropdown-menu').on('click', function(e){
  if($(this).hasClass('dropdown-menu-form')){
      e.stopPropagation();
  }
});

});

$(document).ready(function(){
  function SetLabelHeaderPage($text){
    $('#lbHeaderPage').html($text);
  }
});

//Modal Lang
$(document).ready(function(){
  $('.modal').css("font-family", 'KanitLight');
  $('.modal').on('shown.bs.modal', function () {
    $(this).css("font-family", 'KanitLight');
  })
});