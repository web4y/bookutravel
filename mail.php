<?php

if(isset($_POST['sendmail'])){
  //Това проверява дали е пуснат пост за пращането на мейла
  $name = $_POST['name'];
  $email = $_POST['email'];
  $msg = $_POST['msg'];

  //Проверка дали е попълнено името
  if($name == ""){ echo "Трябва да попълните името!"; }

  //Проверка и за емейла
  elseif($email == ""){ echo "Трябва да попълните e-maila"; }

  //Проверка за съобщението
  elseif($msg == ""){ echo "Не сте написали съобщение"; }

  //Ако всичко е попълнено праща мейла
  else{
    $msg2 = "$name Ви е изпратил следното съобщение:\n\n$msg\n\nЗа контакти: $email";
    if(mail("alexandar@rohov.bg", $msg2, "From: $email\r\nReply-to: $email\r\n")){
      echo "Съобщението е изпратено успешно!";
    }else{ echo "Съобщението не е изпратено!"; }
  }
}

?>