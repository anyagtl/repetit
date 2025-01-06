<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Здесь вы можете сохранить данные в базе данных или отправить их на email
    // Пример: отправка на email
    $to = "kseniya.lipskaya06@gmail.com"; // Замените на ваш email
    $subject = "Новое сообщение от $name";
    $body = "Имя: $name\nEmail: $email\nСообщение: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Сообщение отправлено!";
    } else {
        echo "Ошибка при отправке сообщения.";
    }
} else {
    echo "Некорректный запрос.";
}
?>

Find More
