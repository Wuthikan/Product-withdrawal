/** 
 * @author: Yongyot Khamma
 * @phone: 0957956536
 * @email: yongyot.kamma@gmail.com
 */
 
  $(document).ready(function(){
  $heightRate =25;
  if ($('.content-center').length > 0) { 
    $height = $(window).height() - $('.content-center').offset().top - $(window).scrollTop();
    $('tbody.scroll-2').css('max-height',($height-$heightRate)-300 );
   //Set Label Header Page
    $('#lbHeaderPage').html("<h3>INQUIRY | <span>UPDATE</span></h3>");
  }

//  datetimepicker
$('.date').datetimepicker({
  viewMode: 'days',
  format: 'DD/MM/YYYY'
});

});