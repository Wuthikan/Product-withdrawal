/**
 * @author: Thanunchai Khunsamrit
 * @phone: 0854967377
 * @email: nun_kung2@hotmail.com
 */

// $(document).ready(function(){
//     $heightRate =25;
//     tabContent();
//     $(window).resize(function(event) {
//         event.preventDefault();
//         tabContentResize();
//       });
//
//
//     function tabContent(){
//         if ($('.content-center-right').length > 0) {
//             if ($(window).width() >= $width_desktop) {
//                 $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
//                 $('.tab-content').css('max-height',($height-$heightRate)-125 );
//             }else if ($(window).width() >= $width_mobile_nimi) {
//                 $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
//                 $('.tab-content').css('max-height',($height-$heightRate)-145);
//             }
//             else{
//              $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
//              $('.tab-content').css('max-height',($height-$heightRate)-156);
//          }
//         }
//     }
//     function tabContentResize(){
//         if ($('.content-center-right').length > 0) {
//             if ($(window).width() >= $width_desktop) {
//                 $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
//                 $('.tab-content').css('max-height',($height-$heightRate)-145 );
//             }else if ($(window).width() >= $width_mobile_nimi) {
//                 $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
//                 $('.tab-content').css('max-height',($height-$heightRate)-148);
//             }
//             else{
//              $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
//              $('.tab-content').css('max-height',($height-$heightRate)-154);
//          }
//       }
//     }
//
//
//
//    $('.char-shipment').easyPieChart({
//         easing: 'easeOutBounce',
//         size: 150,
//         onStep: function onStep(from, to, percent) {
//             var datas = $(this.el)[0].dataset;
//             var attrCurrent = datas.current;
//             var attrTotal = datas.total;
//             $(this.el).find('.char-shipment-display').text(attrCurrent + '/' + attrTotal);
//         },
//         barColor: '#71b546'
//     });
//
//
// });

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


$(function() {
    $('.char-total').easyPieChart({
        easing: 'easeOutBounce',
        size: 150,
        onStep: function onStep(from, to, percent) {
            var datas = $(this.el)[0].dataset;
            var attrCurrent = datas.current;
            var attrTotal = datas.total;
            $(this.el).find('.chart-total-display').text(attrCurrent + '/' + attrTotal);
        },
        barColor: '#71b546'
    });
});
