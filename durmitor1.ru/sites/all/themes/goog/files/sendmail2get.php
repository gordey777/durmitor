<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['mail'])&&$_POST['mail']!="")){
$email = "info@durmitor1.ru"; //Здесь прописать свой e-mail
$subject = 'Заказ! с Durmitor1.ru.';
$Path=$_SERVER['HTTP_REFERER'];
$message = '
        <html>
            <head>
                <title>'.$subject.'</title>
            </head>
            <body>
				<p>Форма: <b>Научится ценить здоровъе</b></p>

                <p>Имя: '.$_POST['name'].'</p>

                <p>Email: '.$_POST['mail'].'</p>

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
