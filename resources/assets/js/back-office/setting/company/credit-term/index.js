/**
 * @author: Piyaporn Saykaew
 * @phone: 0884350313
 * @email: piyaporn.saykaew@gmail.com
 */

$(document).ready(function() {
    //center
    $height = $(window).height() - 183;
    $('.content').css('max-height', $height);

    $(window).resize(function(event) {
        event.preventDefault();
        //center
        $height = $(window).height() - 183;
        $('.content').css('max-height', $height);
    });

    $('.chart_green').easyPieChart({
        easing: 'easeOutBounce',
        onStep: function(from, to, percent) {
            $(this.el).find('.percent').text(Math.round(percent));
        },
        barColor: '#60c21e'
    });
    var chart = window.chart = $('.chart').data('easyPieChart');
    $('.js_update').on('click', function() {
        chart.update(Math.random() * 200 - 100);
    });
});

$(document).ready(function(){
	var height = $(window).height() - $('#credit-term-table').offset().top - $(window).scrollTop();
	var pagination = $('.page-showing-pagination').height();
	var newHeight = (height-pagination);
	$('.scroll-2').css({"height":newHeight});
});
