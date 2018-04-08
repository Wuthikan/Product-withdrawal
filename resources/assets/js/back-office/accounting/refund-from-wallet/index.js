/** 
 * @author: ระบุชื่อ-นามสกุลของคุณที่นี่
 * @phone: ระบุหมายเลขโทรศัพท์ของคุณที่นี่
 * @email: ระบุอีเมลของคุณที่นี่
 */

$(document).ready(function () {
    var refund_from_wallet__index__modal__icheck = $('.refund-from-wallet--index--modal .iCheck');
    refund_from_wallet__index__modal__icheck.on('ifChecked', function(event){
        $(this).parent().parent().parent().children('td').css('color','black');
    });
    refund_from_wallet__index__modal__icheck.on('ifUnchecked', function(event){
        $(this).parent().parent().parent().children('td').css('color','#9d9d9d');
    });
});