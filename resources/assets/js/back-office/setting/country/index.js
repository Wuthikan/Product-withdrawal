$(document).ready(function () {
    var checkAll = $('#selectall');
    var checkboxes = $('input[name="item[]"]');

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
            checkAll.prop('checked', false);
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
                    deleteMany($(this).data('url'));
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
    
    function deleteMany(url) {
        if (!url) {
            throw new Error('missing data-url for #deleteAll');
            return;
        }
        var data = { _method: 'delete', item: [] };
        $('[name="item[]"]:checked').each(function () {
            data.item.push($(this).val());
        });
        axios.delete(url,{data}).then(function(r) {
            if (r.status == 200) {
                window.location.reload();
            }
        });
    }
});