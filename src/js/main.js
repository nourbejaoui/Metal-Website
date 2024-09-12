$(document).ready(function() {
  //open modal
  $('#open_modal').click(function() {
      $('#modal_to_open').css(
          {
          'display' : 'block'
        }
      );

  }); 
  //close modal
  
  $('#close-modal').click(function(){
    $('#modal_to_open').css(
        {
        'display' : 'none'
      }
    );
    
    

  });
  
  //mail send avec ajax
  $('#send_email').click(function(e){
    e.preventDefault();
    var data = {
        email: $('#email').val(),
        username: $('#username').val(),
        message: $('#message').val()
    };
    $.ajax({
        url: "mail.php",
        type: 'POST',
        data: data,
        success: function(data) {
            $('#js_alert_success').css({'display' : 'block'});
            setTimeout(function(){
                $('#js_alert_success').css({'display' : 'none'});
                $('#email').val("");
                $('#username').val("");
                $('#message').val("")
            }, 3000);
        },
        error: function(data) {
            $('#js_alert_danger').css({'display' : 'block'});
            setTimeout(function(){
                $('#js_alert_danger').css({'display' : 'none'});
                $('#email').val("");
                $('#username').val("");
                $('#message').val("")
            }, 3000);
        }
    });
});
});