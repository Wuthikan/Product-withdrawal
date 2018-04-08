/** 
 * @author: Nuttasuk Munhadee
 * @phone: 095-826-0044
 * @email: m.nuttasuk@gmail.com
 */

$(document).ready(function () {
    $heightRate = 25;
    tabContent();

    $(window).resize(function (event) {
        event.preventDefault();
        tabContentResize();
    });

});

function tabContent() {
    if ($('.content-center-right').length > 0) {
        if ($(window).width() >= $width_desktop) {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height', ($height - $heightRate) - 75);
        } else if ($(window).width() >= $width_mobile_nimi) {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height', ($height - $heightRate) - 95);
        } else {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height', ($height - $heightRate) - 106);
        }
    }
}

function tabContentResize() {
    if ($('.content-center-right').length > 0) {
        if ($(window).width() >= $width_desktop) {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height', ($height - $heightRate) - 92);
        } else if ($(window).width() >= $width_mobile_nimi) {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height', ($height - $heightRate) - 98);
        } else {
            $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
            $('.tab-content').css('max-height', ($height - $heightRate) - 104);
        }
    }
}


$(function () {
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
    $('.js_update').on('click', function () {
        chart.update(Math.random() * 200 - 100);
    });
});


$(document).ready(function () {

    //  datetimepicker
    $('.top-datetimepicker').datetimepicker({
        viewMode: 'days',
        format: 'DD/MM/YYYY'
    });
    // icheck
    $('.iCheck').iCheck({
        handle: 'checkbox',
        checkboxClass: 'icheckbox_minimal-grey',
        radioClass: 'iradio_minimal-grey',
        increaseArea: '20%' // optional
    });

    $('select').addClass('selectpicker');
    $('.selectpicker').selectpicker();
});