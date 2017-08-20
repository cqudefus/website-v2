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
