/**
 * @author:ปิยะพร ทรายแก้ว
 * @phone: 0884350313
 * @email: piyaporn.saykaew@gmail.com
 */
$(document).ready(function () {
    $(".date").datetimepicker({ viewMode: "days", format: "DD/MM/YYYY" });

    //center
    $height = $(window).height() - 200;
    $('.content').css('max-height', $height);

    $(window).resize(function (event) {
        event.preventDefault();
        //center
        $height = $(window).height() - 200;
        $('.content').css('max-height', $height);
    });
});