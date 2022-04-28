function sendMail(){
   // alert('Mail Sent');
   var valid;
   valid=validateContact();

   if (valid) {
     $.ajax({
       url:'/inc/sendmail.php',
       data:'name='+$("#name").val()+'&email='+$("#email").val()+'&phone='+$('#phone').val()+'&message='+$('#message').val(),
       type:'POST',
       success:function(data){
         $('#mail-status').html(data);
       },
       error:function(){}
     });
   }
}

function validateContact(){
  var valid=true;
  $('.input-box').css('background-color','');
  $('.info').html('');

  if(!$('#name').val()) {
    $('#name-info').html('Name is required');
    $('#name').css('background-color','#FFFFDF');

    valid=false;
  }
  if(!$('#email').val()) {
    $('#email-info').html('Email is required');
    $('#email').css('background-color','#FFFFDF');
    valid=false;
  }
  if(!$('#phone').val()) {
    $('#phone-info').html('Phone is required');
    $('#phone').css('background-color','#FFFFDF');
    valid=false;
  }
  if(!$('#message').val()) {
    $('#message-info').html('Message is required');
    $('#message').css('background-color','#FFFFDF');
    valid=false;
  }
  return valid;
}
