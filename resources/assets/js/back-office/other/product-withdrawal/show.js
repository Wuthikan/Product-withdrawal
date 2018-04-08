/** 
 * @author: Piyaporn Saykaew
 * @phone: 0884350313
 * @email: piyaporn.saykaew@gmail.com
 */

$(document).ready(function() {
    //center
    $height = $(window).height() - 100;
    $('.content').css('max-height', $height);

    $(window).resize(function(event) {
        event.preventDefault();
        //center
        $height = $(window).height() - 100;
        $('.content').css('max-height', $height);
    });

    $('body').on('click', '#showLogBtn', function() {
        $('.modalBox').show();
        $('.contentBox').hide();
    });

    $('body').on('click', '#closeLogBtn', function() {
        $('.modalBox').hide();
        $('.contentBox').show();
    });
});