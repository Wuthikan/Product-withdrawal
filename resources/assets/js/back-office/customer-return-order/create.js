$(document).ready(function(){
    //Set Label Header Page
    $('#lbHeaderPage').html("<h3>CUSTOMER RETURN ORDER | <span>CREATE</span></h3>");

    $('.x_content').closest('.x_panel').addClass('scroll-2');

    $('.date').datetimepicker({
        viewMode: 'days',
        format: 'DD/MM/YYYY'
      });

    $('.date').datetimepicker({
      viewMode: 'days',
      format: 'DD/MM/YYYY'
    });
    $('[type=file]').change((e) => {
      const filelist = e.target.files;
      const targetId = $(e.target).data('target');
      console.log(targetId, e);
      if (filelist) {
          if (filelist[0])
              $(targetId).text(filelist[0].name);
      }
    });
});
