$(document).ready(function () {
    $('#datetimepicker').datetimepicker();

    var uploadOption = {
        width: '95px',
        height: '95px',
        backgroundSize: 'cover',
        fontSize: '24px',
        borderRadius: '5px',
        border: '3px solid #dedede',
        lang: 'ngin'
    };

    $('.upload-preview').uploadPreview(uploadOption);

    var uploadFields = 6;
    $('.uploadAddMore').click(function () {
        var html = "<div class=\"col-md-4 uploadPhotoSection\">\n" +
            "                                            <div class=\"form-group\">\n" +
            "                                                <div class=\"uploadPreview-" + uploadFields + "\">\n" +
            "                                                    <input type=\"file\" name=\"Photo1\" accept=\"image/gif, image/jpeg, image/png\">\n" +
            "                                                </div>\n" +
            "                                            </div>\n" +
            "                                        </div>";
        $('#uploadMoreSection').append(html);
        $('.uploadPreview-' + uploadFields).uploadPreview(uploadOption);
        uploadFields++;
    })
});
