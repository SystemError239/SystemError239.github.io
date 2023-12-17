<?php
  $to = "mlarchenko04@gmail.com"; 
  $tema = "Сообщение с сайта url_вашего_сайта";
//присвоить переменной значение, полученное из формы name=name   
  $message = "Имя отправителя: ".$_POST['user_text']."<br>";
//полученное из формы name=email   
  $message .= "Болезнь: ".$_POST['user_check']."<br>";
//полученное из формы name=sex
  $message .= "Осел: ".$_POST['osel']."<br>";
//полученное из формы name=message  
  $message .= "Пол: ".$_POST['gender']."<br>";
// указывает на тип посылаемого контента   
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
//отправляет получателю на емайл значения переменных 
  mail($to, $tema, $message, $headers);

echo "<br> <center>Сообщение отправлено, спасибо!</center>";  
?>