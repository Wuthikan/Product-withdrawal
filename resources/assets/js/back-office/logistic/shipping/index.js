/** 
 * @author: ระบุชื่อ-นามสกุลของคุณที่นี่
 * @phone: ระบุหมายเลขโทรศัพท์ของคุณที่นี่
 * @email: ระบุอีเมลของคุณที่นี่
 */
$(function() {

	$heightRate =40;
  //tabContent();

  $(window).resize(function(event) {
    //event.preventDefault();
    //tabContentResize();
  });

  $('.chart').easyPieChart({
    size: 200
  });

  // Set Heading title
  //$('#lbHeaderPage').html("<h3>SHIPPING | <span>INDEX</span></h3>");

  function tabContent() {
    if ($('.content-center-right').length > 0) { 
      if ($(window).width() >= $width_desktop) {
        $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
        $('.tab-content').css('max-height',($height-$heightRate)-125 );
      } else if ($(window).width() >= $width_mobile_nimi) {
        $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
        $('.tab-content').css('max-height',($height-$heightRate)-145);
      } else {
        $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
        $('.tab-content').css('max-height',($height-$heightRate)-156);
      }
 		}
	}
 function tabContentResize(){
		if ($('.content-center-right').length > 0) { 
		  if ($(window).width() >= $width_desktop) {
	      $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
	      $('.tab-content').css('max-height',($height-$heightRate)-145 );
		  } else if ($(window).width() >= $width_mobile_nimi) {
	      $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
	      $('.tab-content').css('max-height',($height-$heightRate)-148);
		  } else{
		   $height = $(window).height() - $('.content-center-right').offset().top - $(window).scrollTop();
		   $('.tab-content').css('max-height',($height-$heightRate)-154);
			}
  	}
	}

});

$(document).ready(function () {
  $('.datetimepicker').datetimepicker({format: 'DD/MM/YYYY'});
});
