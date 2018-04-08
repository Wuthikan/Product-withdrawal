/** 
 * @author: Piyaporn Saykaew
 * @phone: 0884350313
 * @email: piyaporn.saykaew@gmail.com
 */

$(document).ready(function() {
    //center
    $height = $(window).height() - 290;
    $('.content').css('max-height', $height);

    $(window).resize(function(event) {
        event.preventDefault();
        //center
        $height = $(window).height() - 290;
        $('.content').css('max-height', $height);
    });

    $(".date").datetimepicker({ viewMode: "days", format: "DD/MM/YYYY" });
});