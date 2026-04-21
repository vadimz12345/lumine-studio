<?php
// Впишите вашу почту
$to_email = "your-email@gmail.com"; 

// Получаем данные напрямую из массива POST
$name = htmlspecialchars(strip_tags(trim($_POST["name"])));
$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(strip_tags(trim($_POST["message"])));

// Формируем письмо
$subject = "Новая заявка от: " . $name;
$email_body = "Имя: " . $name . "\nEmail: " . $email . "\n\nСообщение:\n" . $message;
$headers = "From: " . $email . "\r\nReply-To: " . $email . "\r\nContent-Type: text/plain; charset=UTF-8";

// Отправляем почту
mail($to_email, $subject, $email_body, $headers);

// Выводим сообщение и делаем редирект
echo "<script>alert('Заявка успешно отправлена!'); window.location.href = 'brief.html';</script>";
?>