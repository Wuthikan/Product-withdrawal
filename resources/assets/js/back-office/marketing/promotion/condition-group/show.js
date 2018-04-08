/** 
 * @author: วราทัศน์ พานทองถาวร
 * @phone: 087-806-5868
 * @email: boss119@hotmail.com
 */


$(document).ready(function(){
    //center
    $height = $(window).height()-300;
    $('.content').css('max-height',$height);

    $(window).resize(function(event) {
    event.preventDefault();
        //center
        $height = $(window).height()-300;
        $('.content').css('max-height',$height);
    });
});