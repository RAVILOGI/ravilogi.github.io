<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: RSM'; 
    $to = 'vladshumgg@gmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
            
    $body = "From: $name\n E-Mail: $email\n Phone:\n $message";
                
    if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {                 
            if (mail ($to, $subject, $body, $from)) { 
            echo '<p>Ваше сообщение успешно отправлено!</p>';
        } else { 
            echo '<p>Что-то пошло не так, вернитесь обратно и попробуйте снова!</p>'; 
        } 
    } else if ($_POST['submit'] && $human != '4') {
        echo '<p>Ответ на вопрос анти-спама неправильный</p>';
    }
    } else {
        echo '<p>Заполните все обязательные поля и попробуйте снова!</p>';
    }
}
?>