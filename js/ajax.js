$(document).ready(function(){

  $("#container").submit(function(){

      var fd = new FormData(this);
      $('#load').show();

      $.ajax({
          url: 'send.php',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){
              if(response != 0 && response == 'ok'){
                $('#load').hide();
                $('#success').show();
              }else{
                  alert('Ops! algo deu errado, tente novamente.');
              }
          },
      });
      return false;
  });
});