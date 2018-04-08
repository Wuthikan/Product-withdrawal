/**
 * @author:ปิยะพร ทรายแก้ว
 * @phone: 0884350313
 * @email: piyaporn.saykaew@gmail.com
 */
$(".date").datetimepicker({ viewMode: "days", format: "DD/MM/YYYY" });

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profilePicture').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#profilePictureField").change(function () {
    readURL(this);
});