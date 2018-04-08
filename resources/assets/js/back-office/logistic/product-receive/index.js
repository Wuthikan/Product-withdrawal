/** 
 * @author: Nitipan Pompan
 * @phone: 083-447-0116
 * @email: nitipan.p@hotmail.com
 */
$(document).ready(function() {
    $heightRate = 25;
    if ($('.content-center-right').length > 0) {
        $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
        $('.tab-content').css('max-height', ($height - $heightRate) - 90);
    }
    //Set Label Header Page
    //$('#lbHeaderPage').html("<h3>PRODUCT RE | <span>INDEX</span></h3>");

    var parent = $("<div class='row productReceiveImages'></div>");
    parent.append("<div class='col-md-2 col-sm-3 col-xs-3 col-lg-2'></div>");

    for (var i = 0; i <= 3; i++) {
        parent.append("<div class='col-md-2 col-sm-3 col-xs-3 col-lg-2'><img src='https://thumb1.shutterstock.com/display_pic_with_logo/1699708/407603929/stock-photo-packing-product-boxes-icon-design-style-box-delivery-on-wood-pallet-package-service-407603929.jpg'class='img-responsive' /></div>");
    }
    parent.append("<div class='col-md-2 col-sm-3 col-xs-3 col-lg-2'></div>");
    $("div.panel-body.scroll-2").prepend(parent);

    $('.x_content').closest('.x_panel').addClass('scroll-2');
});