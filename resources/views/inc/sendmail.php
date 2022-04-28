<?php
  $toEmail="1emmanuelbarasa340@gmail.com";
  $mailHeaders="From:". $_POST['name']."<". $_POST['email'].">\r\n";
  $subject=$_POST['phone'];
  $message=$_POST['message'];
  if (mail($toEmail,$subject,$message,$mailHeaders)) {
      print("<p class='success'>Mail Sent.</p>");
  }else {
    print("<p>Problem in sending mail.</p>");
  }

 ?>
