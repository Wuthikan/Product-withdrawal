
$(document).ready(function() {
  $('.date').datetimepicker({
    viewMode: 'days',
    format: 'DD/MM/YYYY'
  });
  $('[type=file]').change((e) => {
    const filelist = e.target.files;
    const targetId = $(e.target).data('target');
    if (filelist) {
        if (filelist[0])
            $(targetId).text(filelist[0].name);
    }
  });
  $('.upload-btn-wrapper .btn1').click(function(e){
    e.preventDefault();
    $(this).next('input').click();
  });
  $('.btn-cancel-upload').click(function(){
    let tartget = $(this).data("target")
    console.log($(this).data("file"));
    $(tartget).wrap('<form>').closest('form').get(0).reset();
    $(tartget).unwrap(); 
    $($(this).data("file")).text('-- No file --');       
  });
});