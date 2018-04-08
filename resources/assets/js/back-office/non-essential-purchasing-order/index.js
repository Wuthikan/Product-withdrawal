/** 
 * @author: สถาพร สำราญ
 * @phone: 0805799619
 * @email: bbird_ss@outlook.com
 */

$(document).ready(function(){
    $heightRate =25;
    tabContent();

    $(window).resize(function(event) {
      event.preventDefault();
      tabContentResize();
  });

});

 function tabContent(){
    if ($('.content-center-right').length > 0) { 
        if ($(window).width() >= $width_desktop) {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height',($height-$heightRate)-125 );
        }else if ($(window).width() >= $width_mobile_nimi) {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height',($height-$heightRate)-145);
        }
        else{
         $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
         $('.tab-content').css('max-height',($height-$heightRate)-156);
     }
 }
}
 function tabContentResize(){
    if ($('.content-center-right').length > 0) { 
        if ($(window).width() >= $width_desktop) {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height',($height-$heightRate)-145 );
        }else if ($(window).width() >= $width_mobile_nimi) {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height',($height-$heightRate)-148);
        }
        else{
         $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
         $('.tab-content').css('max-height',($height-$heightRate)-154);
     }
  }
}