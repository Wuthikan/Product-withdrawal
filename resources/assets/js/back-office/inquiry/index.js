/** 
 * @author: Yongyot Khamma
 * @phone: 095-795-6536
 * @email: yongyot.kamma@gmail.com
 */

 $(document).ready(function(){
    $heightRate =25;
    tabContent();

    $(window).resize(function(event) {
      event.preventDefault();
      tabContentResize();
  });
  //Set Label Header Page
  $('#lbHeaderPage').html("<h3>INQUIRY | <span>INDEX</span></h3>");

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

    $('.char-first-time').easyPieChart({
        easing: 'easeOutBounce',
        onStep: function onStep(from, to, percent) {
            var datas = $(this.el)[0].dataset;
            var attrCurrent = datas.current;
            var attrTotal = datas.total;
            $(this.el).find('.chart-time-display').text(attrCurrent + '/' + attrTotal);
        },
        barColor: '#71b546'
    });

    $('.char-second-time').easyPieChart({
        easing: 'easeOutBounce',
        onStep: function onStep(from, to, percent) {
            var datas = $(this.el)[0].dataset;
            var attrCurrent = datas.current;
            var attrTotal = datas.total;
            $(this.el).find('.chart-time-display').text(attrCurrent + '/' + attrTotal);
        },
        barColor: '#71b546'
    });

    $('.char-third-time').easyPieChart({
        easing: 'easeOutBounce',
        onStep: function onStep(from, to, percent) {
            var datas = $(this.el)[0].dataset;
            var attrCurrent = datas.current;
            var attrTotal = datas.total;
            $(this.el).find('.chart-time-display').text(attrCurrent + '/' + attrTotal);
        },
        barColor: '#71b546'
    });

    var chart = window.chart = $('.chart').data('easyPieChart');
    $('.js_update').on('click', function() {
        chart.update(Math.random()*200-100);
    });
});
