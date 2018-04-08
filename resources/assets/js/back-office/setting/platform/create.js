/** 
 * @author: Piyaporn Saykaew
 * @phone: 0884350313
 * @email: piyaporn.saykaew@gmail.com
 */

$(document).ready(function () {
    //center
    $height = $(window).height() - 160;
    $('.content').css('max-height', $height);

    $(window).resize(function (event) {
        event.preventDefault();
        //center
        $height = $(window).height() - 160;
        $('.content').css('max-height', $height);
    });
});