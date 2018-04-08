/**
 * @author: ระบุชื่อ-นามสกุลของคุณที่นี่
 * @phone: ระบุหมายเลขโทรศัพท์ของคุณที่นี่
 * @email: ระบุอีเมลของคุณที่นี่
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
 });
