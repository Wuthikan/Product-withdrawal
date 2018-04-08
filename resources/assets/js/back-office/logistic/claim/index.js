/**
 * @author: ระบุชื่อ-นามสกุลของคุณที่นี่
 * @phone: ระบุหมายเลขโทรศัพท์ของคุณที่นี่
 * @email: ระบุอีเมลของคุณที่นี่
 */
 $(document).ready(function () {
     $heightRate = 25;
     tabContent();

     $(window).resize(function (event) {
         event.preventDefault();
         tabContentResize();
     });
     //Set Label Header Page
     $('#lbHeaderPage').html("<h3>CLAIM | <span>INDEX</span></h3>");


     $height = $(window).height() - 225;
     $('.content').css('height', $height);

     $(window).resize(function (event) {
         event.preventDefault();
         //center
         $height = $(window).height() - 225;
         $('.content').css('height', $height);
     });
 });

 function tabContent() {
     if ($('.content-center-right').length > 0) {
         if ($(window).width() >= $width_desktop) {
             $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
             $('.tab-content').css('max-height', $height - $heightRate - 125);
         } else if ($(window).width() >= $width_mobile_nimi) {
             $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
             $('.tab-content').css('max-height', $height - $heightRate - 145);
         } else {
             $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
             $('.tab-content').css('max-height', $height - $heightRate - 156);
         }
     }
 }
 function tabContentResize() {
     if ($('.content-center-right').length > 0) {
         if ($(window).width() >= $width_desktop) {
             $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
             $('.tab-content').css('max-height', $height - $heightRate - 145);
         } else if ($(window).width() >= $width_mobile_nimi) {
             $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
             $('.tab-content').css('max-height', $height - $heightRate - 148);
         } else {
             $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
             $('.tab-content').css('max-height', $height - $heightRate - 154);
         }
     }
 }