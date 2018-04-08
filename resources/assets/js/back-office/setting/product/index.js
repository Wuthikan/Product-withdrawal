/** 
 * @author: Kan Jung
 * @phone: 08-3928-4441
 * @email: kankan513@hotmail.com
 */

$(document).ready(function(){
    $("#lbHeaderPage").html("<h3>PRODUCTS | <span>INDEX</span></h3>");
    // var height = $(window).height() - $('#accordion').offset().top - $(window).scrollTop();
    // var pagination = $('.page-showing-pagination').height();
    // var newHeight = (height-pagination);
    // $('.scroll-2').css('max-height', newHeight);


    $heightRate =15;
    tabContent();

    $(window).resize(function(event) {
        event.preventDefault();
        tabContentResize();
    });

    function tabContent(){
        if ($('.content-center-right').length > 0) { 
            if ($(window).width() >= $width_desktop) {
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                $('.scroll-2').css('max-height',($height-$heightRate)-125 );
            }else if ($(window).width() >= $width_mobile_nimi) {
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                // $('.scroll-2').css('max-height',($height-$heightRate)-145);
                $('.scroll-2').css('max-height',($height-$heightRate)-125);
            }
            else{
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                $('.scroll-2').css('max-height',($height-$heightRate)-156);
            }
        }
    }

    function tabContentResize(){
        if ($('.content-center-right').length > 0) { 
            if ($(window).width() >= $width_desktop) {
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                $('.scroll-2').css('max-height',($height-$heightRate)-145 );
            } else if ($(window).width() >= $width_mobile_nimi) {
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                $('.scroll-2').css('max-height',($height-$heightRate)-148);
            } else {
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                $('.scroll-2').css('max-height',($height-$heightRate)-154);
            }
        }
    }
});