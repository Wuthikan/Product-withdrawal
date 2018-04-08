/** 
 * @author: สถาพร สำราญ
 * @phone: 0805799619
 * @email: bbird_ss@outlook.com
 */

$(document).ready(function() {
    //center
    // $height = $(window).height() - 260;
    // $('.content').css('max-height', $height);

    // $(window).resize(function(event) {
    //     event.preventDefault();
    //     //center
    //     $height = $(window).height() - 260;
    //     $('.content').css('max-height', $height);
    // });

    $(".date").datetimepicker({ viewMode: "days", format: "DD/MM/YYYY" });
});