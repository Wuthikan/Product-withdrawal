/** 
 * @author: Kan Jung
 * @phone: 08-3928-4441
 * @email: kankan513@hotmail.com
 */

$(document).ready(function(){
    $("#lbHeaderPage").html("<h3>PRODUCTS > BARCODE | <span>INDEX</span></h3>");
    var height = $(window).height() - $('.product-barcode-list').offset().top - $(window).scrollTop();
    var pagination = $('.page-showing-pagination').height();
    var newHeight = (height-pagination)+35;
    $('.scroll-2').css({"height":newHeight});
});