$(document).ready(function() {
    $('.input-file > a').click(function() {
        var id = $(this).attr('href');
        $(this).parent().find('input').trigger('click');

        return false;
    });

    $("input#file-logo").change(function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
        $(this).parent().find('img').fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
    });

    $("input#file-background").change(function(event) {
        var tmppath = URL.createObjectURL(event.target.files[0]);
        $(this).parent().find('img').fadeIn("fast").attr('src', URL.createObjectURL(event.target.files[0]));
    });


});