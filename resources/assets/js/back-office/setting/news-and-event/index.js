/** 
 * @author: ระบุชื่อ-นามสกุลของคุณที่นี่
 * @phone: ระบุหมายเลขโทรศัพท์ของคุณที่นี่
 * @email: ระบุอีเมลของคุณที่นี่
 */
function render() {
  // set dynamic panel width
  var width = $('#newsevent').width() - 574;
  //$('.panel-left').width(width-216);
  const description = $('.description');
  description.width(width);
  const p = description.find('p');
  const height = description.height() - description.find('b').height() - 20;
  p.width(width);
  $('.description--head').width(width);
  p.height(height);
  $('.description p').ellipsis();
  console.log('resize');
};
var resizeTimer;

$(document).ready(() => {
   $(window).resize((event) => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(render, 250);
  });

  resizeTimer = setTimeout(render, 250);

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  var checkAll = $('#selectall');
  var checkboxes = $('input.item');

  checkAll.on('ifChecked ifUnchecked', function (event) {
    if (event.type == 'ifChecked') {
      checkboxes.iCheck('check');
    } else {
      checkboxes.iCheck('uncheck');
    }
  });

  checkboxes.on('ifChanged', function (event) {
    if (checkboxes.filter(':checked').length == checkboxes.length) {
      checkAll.prop('checked', 'checked');
    } else {
      checkAll.removeProp('checked');
    }
    checkAll.iCheck('update');
  });

  $('#deleteAll').click(function () {
    if ($('[name="item[]"]:checked').length === 0) {
      toastr.error("Please select some record");
    }
    else {
      // ajax to delete or something
      if ($('[name="item[]"][data-deleted="1"]:checked').length > 0) {
        if (confirm('Warning!, some record will cannot restore do you want to continue?')) {
          deleteMany();
        }
      }
      else {
        deleteMany();
      }
    }
  });

  $('.itemStatus').change(function(){
      var patchPath = $(this).data('action');
      $.ajax({
        url: patchPath,
        type: 'post',
        data: {status: !$(this).is(':checked') ? 'on' : 'off', _method: "patch"}, //
        dataTyle: 'html',
        beforeSend: function () {
        }
      })
      .done(function (data) {
        if (data == 1) {
          alert('Updated');
        }
        else {
          alert('Something went wrong! cannot update status');
        }
      })
      .error(function () {
        alert('Error!');
      })
      .always(function () {

      });
  });

  function deleteMany() {
    var data = { _method: 'delete', item: [] }
    $('[name="item[]"]:checked').each(function () {
      data.item.push($(this).val());
    });
    $.ajax({
      url: $('#itemList').attr('action'),
      type: 'post',
      data: $.param(data),
      dataTyle: 'html',
      beforeSend: function () {
      }
    })
      .done(function (data) {
        if (data == 1) {
          alert('Deleted');
          window.location = $('#itemList').data('redirect');
        }
        else {
          alert('Something went wrong! cannot delete it process will becanceled');
        }
      })
      .error(function () {
        alert('Error!');
      })
      .always(function () {

      });
  }

});