var cqudefus = {};

cqudefus.initServices = function() {
  $.ajax({
        url:'/services/index/',
        type:"GET",
        success:function(data){
           $('#services').html(data);
        },
        error:function(){
            console.log("view could not be updated");
        }
    });
}

cqudefus.initAppNav = function(){

    $('#nav li').each(function(){
      $(this).on('click', function() {

          $('#nav li').each(function(){
              $(this).removeClass('current-menu-item');
          });

          $(this).addClass('current-menu-item');
      });
    });
}
