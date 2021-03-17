<?php
// print_r($_POST)

$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$error='';

// if(trim($Email) == '')
// $error= 'Введите email';
// else if(trim($First_name) == '')
// $error= 'Введите имя';
// else if(trim($Last_name) == '')
// $error= 'Введите фамилию';
// else if(trim($Address) <3 )
// $error= 'Введите полный адрес';
//
// if($error !='') {
//   echo $error;
//   exit;
// }

$subject = "=?utf-8?B?".base64_encode("test")."?=";
$headers = "From: $Email\r\nReply-to $Email\r\nContent-type: text/html;charset=utf-8\r\n";

mail('bulkin_viktor@mail.ru',$subject ,$Address, $headers);

header('Location: /summary.php');

 ?>
