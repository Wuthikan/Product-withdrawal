/** 
 * @author: Kan Jung
 * @phone: 08-3928-4441
 * @email: kankan513@hotmail.com
 */

$(document).ready(function(){
    $("#lbHeaderPage").html("<h3>PRODUCTS > PRICE | <span>INDEX</span></h3>");
    // var height = $(window).height() - $('#accordion').offset().top - $(window).scrollTop();
    // var pagination = $('.page-showing-pagination').height();
    // var newHeight = (height-pagination)-15;
    // $('.tab-content').css({"height":newHeight});

    $heightRate =25;
    tabContent();

    $(window).resize(function(event) {
        event.preventDefault();
        tabContentResize();
    });

    function tabContent(){
        if ($('.content-center-right').length > 0) { 
            if ($(window).width() >= $width_desktop) {
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                $('.tab-content').css('max-height',($height-$heightRate)-150 );
            }else if ($(window).width() >= $width_mobile_nimi) {
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                $('.tab-content').css('max-height',($height-$heightRate)-145);
            }
            else{
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                $('.tab-content').css('max-height',($height-$heightRate)-156);
            }
        }
    }

    function tabContentResize(){
        if ($('.content-center-right').length > 0) { 
            if ($(window).width() >= $width_desktop) {
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                $('.tab-content').css('max-height',($height-$heightRate)-170 );
            } else if ($(window).width() >= $width_mobile_nimi) {
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                $('.tab-content').css('max-height',($height-$heightRate)-148);
            } else {
                $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
                $('.tab-content').css('max-height',($height-$heightRate)-154);
            }
        }
    }
});