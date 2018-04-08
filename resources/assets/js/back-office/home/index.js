/** 
 * @author: ระบุชื่อ-นามสกุลของคุณที่นี่
 * @phone: ระบุหมายเลขโทรศัพท์ของคุณที่นี่
 * @email: ระบุอีเมลของคุณที่นี่
 */

 $(document).ready(function(){
    $heightRate =25;
    tabContent();

    $(window).resize(function(event) {
      event.preventDefault();
      tabContentResize();
  });
});

function tabContent() {
    if ($('.content-center-right').length > 0) {
        if ($(window).width() >= $width_desktop) {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height', $height - $heightRate - 125);
        } else if ($(window).width() >= $width_mobile_nimi) {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height', $height - $heightRate - 130);
        } else {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height', $height - $heightRate - 130);
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
            $('.tab-content').css('max-height', $height - $heightRate - 142);
        } else {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height', $height - $heightRate - 135);
        }
    }
}


$(function() {
	$('#chart_red').easyPieChart({
		easing: 'easeOutBounce',
		onStep: function(from, to, percent) {
			$(this.el).find('.percent').text(Math.round(percent));
		},

	});
	$('#chart_green').easyPieChart({
		easing: 'easeOutBounce',
		onStep: function(from, to, percent) {
			$(this.el).find('.percent').text(Math.round(percent));
		},
		barColor:'#60c21e'
	});
	var chart = window.chart = $('.chart').data('easyPieChart');
	$('.js_update').on('click', function() {
		chart.update(Math.random()*200-100);
	});
});