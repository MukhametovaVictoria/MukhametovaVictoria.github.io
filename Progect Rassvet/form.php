<?

if($_POST["submit"])

{

    $email_admin = 'vicka-98@mail.ru'; if(!$email_admin) { $BAD = 'Поле $email_admin не заполнено'; }
    $subject = 'Письмо от потенциального клиента';
    if($_POST["name"]) { $name = strip_tags ($_POST["name"]); } else { $BAD = 'Поле name не заполнено'; }
    if($_POST["phone"]) { $name = strip_tags ($_POST["phone"]); }

    if($_POST["email"]) { $email = strip_tags ($_POST["email"]); } else { $BAD = 'Поле email не заполнено'; }
    if($_POST["company"]) { $name = strip_tags ($_POST["company"]); }

    if($_POST["message"])

    {

    $message = 'Пользователь: ' .$name .' <br> E-mail: ' .$email .' <br> Компания: ' .$company .' <br> Телефон: ' .$phone .' <br> Сообщение: <br> '. strip_tags ($_POST["message"]);

    }

    else { $BAD = 'Поле message не заполнено'; }

    if(!$BAD)

    {

       $send = @mail($email_admin, $subject, $message);

        if($send) { $info = 'Сообщение отправлено'; } else {$BAD = 'не удалось отправить сообщение'; }

    }

    if($BAD){ $info = '<red>'.$BAD .'</red>';}

}

?>