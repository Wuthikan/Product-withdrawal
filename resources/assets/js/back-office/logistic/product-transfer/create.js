/** 
 * @author: Thanunchai Khunsamrit
 * @phone: 0854967377
 * @email: nun_kung2@hotmail.com
 */
$(document).ready(function(){
    //Set Label Header Page
    $('#lbHeaderPage').html("<h3>PRODUCT TRANSFER | <span>CREATE</span></h3>");

    $('.x_content').closest('.x_panel').addClass('scroll-2');

    $('.date').datetimepicker({
        viewMode: 'days',
        format: 'DD/MM/YYYY'
      });
});