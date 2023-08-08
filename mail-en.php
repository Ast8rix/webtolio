<?php
// Если скрытое поле заполнили
if ($_POST[':']!=''){
  die('No bots!');
}
else{
  $to = "through8space@gmail.com"; // адрес куда отправлять письмо
$subject = "mail from Webtolio"; // заголовок письма
$redirect = "./ok.html"; // адрес страницы, на которую нужно перейти после отправки письма

foreach($_POST as $key => $value)
{ $fields .= $key.": ".$value." \r\n"; }
$message = $subject." \r\n".$fields; 
$headers  = "Content-type:  text/plain; charset=utf-8 \r\n"; 
mail($to, $subject, $message, $headers);
header('Location: '.$redirect);
}
?>
