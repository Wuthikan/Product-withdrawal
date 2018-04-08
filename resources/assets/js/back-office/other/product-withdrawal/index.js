/** 
 * @author: Piyaporn Saykaew
 * @phone: 0884350313
 * @email: piyaporn.saykaew@gmail.com
 */

$(document).ready(function() {
    $heightRate = 25;
    if ($('.content-center-right').length > 0) {
        $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
        $('.tab-content').css('max-height', ($height - $heightRate) - 90);
    }

    //center
    $height = $(window).height() - 178;
    $('.content').css('max-height', $height);

    $(window).resize(function(event) {
        event.preventDefault();
        //center
        $height = $(window).height() - 178;
        $('.content').css('max-height', $height);
    });
});