/**
 * @author:ปิยะพร ทรายแก้ว
 * @phone: 0884350313
 * @email: piyaporn.saykaew@gmail.com
 */
$(".date").datetimepicker({ viewMode: "days", format: "DD/MM/YYYY" });

function readURL(input) {

	console.log(input.files);

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            // $('.profilePicture').attr('src', e.target.result);
            $(input).prev().attr('src', e.target.result);
            $('[id^=profilePictureField]').next().find('div').removeClass('checked');
            $(input).next().find('div').addClass('checked');
            $('#imageShow').val(input.name);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$('[id^=profilePictureField]').change(function () {
    readURL(this);
});