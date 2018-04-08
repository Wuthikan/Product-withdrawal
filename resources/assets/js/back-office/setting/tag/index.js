/** 
 * @author: Mr. Piyaporn Saykaew
 * @phone: 0884350313
 * @email: piyaporn.saykaew@gmail.com
 */

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    //center
    $(window).resize(function (event) {
        event.preventDefault();
        //center
        var notifyHeight = 0;
        $('.notification').each(function(){
            notifyHeight += $(this).outerHeight(true);
        });
        $height = $(window).height() - (180 + notifyHeight);
        $('.content').css('height', $height);
    });

    $(window).trigger('resize');

    var counter = 0;
    var interval = setInterval(function () {
        counter++;
        if (counter == 3) {
            $('.notification').slideUp(function(){
                $(this).remove();
                $(window).trigger('resize');
            });
            clearInterval(interval);
        }
    }, 1000);

    $(document).on('submit', '#editNameForm', function (e) {
        e.preventDefault();
        if ($('#newName').val().trim() == '') {
            toastr["warning"]("Please enter tag name", "Warning");
        } else {
            $.ajax({
                url: $('#editNameForm').attr('action'),
                type: 'post',
                data: $('#editNameForm').serialize(),
                dataTyle: 'html',
                beforeSend: function () {

                }
            })
            .done(function (data) {
                if (data == 1) {
                    $('.tagname_' + $('#editNameForm').data('id')).html($('#newName').val());
                    $('#newNameModal').trigger('click');
                    toastr["success"]("Tag name has been saved", "Success");
                }
                else {
                    toastr["error"]("Something went wrong! cannot delete it process will be canceled", "Error!");
                }
                $('#modalBox').modal('hide');
            })
            .error(function (xhr, status, error) {
                if (xhr.responseText != ''){
                    var errorResponse = $.parseJSON(xhr.responseText);
                    var errors = errorResponse.errors;
                    $.each(errors, function(i, val){
                        $.each(val, function(ierr, errVal){
                            toastr["error"](errVal, "Error!");
                        });
                    });
                } else {
                    toastr["error"]("Something went wrong!", "Error!");
                }
            })
            .always(function () {

            });
        }

    });

    $(document).on('click', '.editName', function () {
        var element = $(this);
        var url = element.data('checklink');
        $.ajax({
            url: url,
            type: 'get',
            dataType: 'html',
            beforeSend: function () {

            }
        }).done(function (data) {
            if (data == 'active')
            {
                var action = element.data('action');
                var dataId = element.data('id');
                var oldName = $('.tagname_'+dataId).text();
                $('#editNameForm').attr('action', action);
                $('#editNameForm').data('id', dataId);
                $('#oldTagName').html(oldName);
                $('#newName').val(oldName);
                $('#idNewName').val(dataId);
                $('#modalBox').modal('show');
                $('.modal-backdrop').hide();
            } else {
                location.reload();
            }
        })
        .error(function () {

        })
        .always(function () {

        });
    })

    var checkAll = $('#selectall');
    var checkboxes = $('input[name="item[]"]:enabled');

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

    $('input[name=rdoBy]').change(function() {
        $('.form-header-index').submit();
    });

    $('input[name=rdoOrder]').change(function() {
        $('.form-header-index').submit();
    });

    $('#deleteAll').click(function () {
        if ($('input[name="item[]"]:checked').length === 0) {
            toastr["warning"](window.lang.alert.none_selected, "Warning");
        }
        else
        {
            swal({
                title: 'Are you sure?',
                html: "",
                type: 'warning',
                confirmButtonColor: '#d60500',
                showCancelButton: true,
                confirmButtonText: 'Confirm!'
            }).then((result) => {
                if (result.value) {
                    deleteMany();
                }
            });
        }
    });

    $('.submitDelete').submit(function (e) {
        e.preventDefault();
        var form = $(this);
        if (form.find('input[name=_force]').val()) {
            swal({
                title: 'Are you sure?',
                text: "Do you want to delete!",
                type: 'warning',
                confirmButtonColor: '#d60500',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    form.unbind().submit();
                }
            });
        } else {
            form.unbind().submit();
        }
    });
    
    function deleteMany() {
        var data = { _method: 'delete', item: [] }
        $('[name="item[]"]:checked').each(function () {
            data.item.push($(this).val());
        });
        $.ajax({
            url: $('#tagList').attr('action'),
            type: 'post',
            data: $.param(data),
            dataTyle: 'html',
            beforeSend: function () {
                console.log($('#tagList').serialize())
            }
        })
        .done(function (data) {
            if (data == 1) {
                window.location = $('#tagList').data('redirect');
            }
            else {
                toastr["error"]("Something went wrong! cannot delete it process will becanceled", "Error!");
            }
        })
        .error(function () {
            toastr["error"]("Something went wrong!", "Error!");
        })
        .always(function () {

        });
    }
});