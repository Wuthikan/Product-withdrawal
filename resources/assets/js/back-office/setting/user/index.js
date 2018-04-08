/** 
 * @author: Jirawat I.
 * @phone: 098-318-7208
 * @email: nodtem66@gmail.com
 */
$('.switchCheck').click((e)=>{
  const text = (e.target.checked) ? 'BLOCK' : 'NORMAL';
  console.log($(e.target));
  $(e.target).siblings('.check-label').text(text);
});

var resizeTimer;
$(document).ready(() => {
  
  $(window).resize((event) => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(tabContent, 250);
  });

  resizeTimer = window.setTimeout(tabContent, 250);

});

function tabContent(){
  // set dynamic panel width
  var width = $('#user').width();
  $('.panel-user-left').width(width-216);
  $('.profile-text').width(width-216-128);
  // set dynamic last row hieght
  var height = $('tr.last-row').height();
  $('.status-group').height(height);
}