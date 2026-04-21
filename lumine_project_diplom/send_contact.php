<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "luminestudio.hello@gmail.com"; 
$subject = "Вопрос из Контактов от: " . $name;
$body = "Имя: $name\nEmail: $email\n\nСообщение:\n$message";

mail($to, $subject, $body);

echo "<script>
        alert('Ваше сообщение отправлено!');
        window.location.href = 'contact.html';
      </script>";
?>