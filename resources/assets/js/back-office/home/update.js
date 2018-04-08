/** 
 * @author: ระบุชื่อ-นามสกุลของคุณที่นี่
 * @phone: ระบุหมายเลขโทรศัพท์ของคุณที่นี่
 * @email: ระบุอีเมลของคุณที่นี่
 */
  $(document).ready(function(){
  $heightRate =25;
  if ($('.content-center').length > 0) { 
    $height = $(window).height() - $('.content-center').offset().top - $(window).scrollTop();
    $('tbody.scroll-2').css('max-height',($height-$heightRate)-280 );
  }

//  datetimepicker
$('.date').datetimepicker({
  viewMode: 'days',
  format: 'DD/MM/YYYY'
});

});