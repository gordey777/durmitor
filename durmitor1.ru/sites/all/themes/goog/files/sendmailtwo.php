<?php
if((isset($_POST['phone'])&&$_POST['phone']!="")&&(isset($_POST['email'])&&$_POST['email']!="")){
$email = "info@durmitor1.ru"; //Здесь прописать свой e-mail
$subject = 'Заказ! с Durmitor1.ru. Форма "Хотите повторить?"';
$Path=$_SERVER['HTTP_REFERER'];
$message = '
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>
				<p>Форма: <b>Хотите так же?</b></p>
                <p>Email: '.$_POST['phone'].'</p>
                <p>Сообщение: '.$_POST['email'].'</p>                        
            </body>
         </html>' . $Path;

//$text = "=?utf-8?b?" . base64_encode($text) . "?=";
$subject = "=?utf-8?b?" . base64_encode($subject) . "?=";
$headers = "From: admin \r\n";
$headers .= "Mime-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
mail($email, $subject, $message, $headers); 
      
echo 1;

}
?>