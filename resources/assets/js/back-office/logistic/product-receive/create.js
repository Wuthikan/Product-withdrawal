/**
 * @author: Thanunchai  Khunsamrit
 * @phone: 0854967377
 * @email: nun_kung2@hotmail.com
 */

$(document).ready(function () {

    $('.date').datetimepicker({
        viewMode: 'days',
        format: 'DD/MM/YYYY'
    });

    uploadImage('#btnUploadOne', '#imgUploadOne');
    uploadImage('#btnUploadTwo', '#imgUploadTwo');
    uploadImage('#btnUploadThree', '#imgUploadThree');
    uploadImage('#btnUploadFour', '#imgUploadFour');
    uploadImage('#btnUploadFive', '#imgUploadFive');
    uploadImage('#btnUploadSix', '#imgUploadSix');
});

function uploadImage (btnId, imgId) {
  $(btnId).on('click', function(){
      $(imgId).trigger('click');
  });
}
