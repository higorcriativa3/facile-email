$(document).ready(function(){

  $("#container").submit(function(){

      var fd = new FormData(this);

      $.ajax({
          url: 'send.php',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){
              if(response != 0){
                  console.log(response);
              }else{
                  alert('file not uploaded');
              }
          },
      });
      return false;
  });
});