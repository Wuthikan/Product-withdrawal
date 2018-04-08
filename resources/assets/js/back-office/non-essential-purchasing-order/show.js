/** 
 * @author: สถาพร สำราญ
 * @phone: 0805799619
 * @email: bbird_ss@outlook.com
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
