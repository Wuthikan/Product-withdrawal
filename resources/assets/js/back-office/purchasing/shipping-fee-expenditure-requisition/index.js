/**
 * @author: ระบุชื่อ-นามสกุลของคุณที่นี่
 * @phone: ระบุหมายเลขโทรศัพท์ของคุณที่นี่
 * @email: ระบุอีเมลของคุณที่นี่
 */
$(document).ready(function () {
    var rowMaster = $(".shipping-fee-table table.ngin-table tbody tr");
    var parent = rowMaster.parent();
    var winHeight = window.innerHeight;

    for (var i = 0; i <= 20; i++) {
        parent.append(rowMaster.clone());
    }

    $(".shipping-fee-table table.ngin-table tbody").css('max-height', winHeight - 213)
});
