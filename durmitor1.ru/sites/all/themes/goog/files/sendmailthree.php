<?php
if((isset($_POST['mail'])&&$_POST['mail']!="")&&(isset($_POST['mess'])&&$_POST['mess']!="")){
$email = "info@durmitor1.ru"; //Здесь прописать свой e-mail
$subject = 'Заказ! с Durmitor1.ru.';
$Path=$_SERVER['HTTP_REFERER'];
$message = '
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>
				<p>Форма: <b>"У вас остались вопросы?"</b></p>
                <p>Email: '.$_POST['mail'].'</p>
                <p>Сообщение: '.$_POST['mess'].'</p>                        
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