/**
 * @author: ระบุชื่อ-นามสกุลของคุณที่นี่
 * @phone: ระบุหมายเลขโทรศัพท์ของคุณที่นี่
 * @email: ระบุอีเมลของคุณที่นี่
 */

 $(document).ready(function(){
 	var height = $(window).height() - $('#customer-tier').offset().top - $(window).scrollTop();
 	var pagination = $('.page-showing-pagination').height();
 	var newHeight = (height-pagination) - 80;
 	$('#content-panel.scroll-2').css({ height: newHeight});
 });
