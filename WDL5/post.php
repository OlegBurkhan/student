<?php
// Инклуды должны быть всегда сверху
include_once __DIR__ . '/models/MessageModel.php';
include_once __DIR__ . '/models/Repository/MessageRepository.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Проверяем пришли ли нужные данные если нет то редиректим назад на index страницу и в урле передает информацию об ошибку
if (empty($_POST['sender_name']) || empty($_POST['email']) || empty($_POST['message'])) {
    $error = urlencode('Please fill all required fields'); // <- https://www.php.net/manual/ru/function.urlencode.php читаем тут зачем и как кодировать параметры в url
    header("Location: http://playground.local/?error=$error"); // <- https://www.php.net/manual/ru/function.header читаем как сделать перенаправление на другую страницу c помощью header
    exit; // <- Смотрим что делает эта команда https://www.php.net/manual/ru/function.exit.php
}
$salt = 'Nnas-623BjwsnBqsd77'; // Salt нушно для генерации еще больше защищенных данных https://ru.wikipedia.org/wiki/%D0%A1%D0%BE%D0%BB%D1%8C_(%D0%BA%D1%80%D0%B8%D0%BF%D1%82%D0%BE%D0%B3%D1%80%D0%B0%D1%84%D0%B8%D1%8F)
$messageModel = new MessageModel();
$messageModel->setMessage($_POST['message']);
$messageModel->setSenderName($_POST['sender_name']);
$messageModel->setEmail($_POST['email']);
$messageModel->setIp((string) $_SERVER['REMOTE_ADDR']);
$messageModel->setUserAgent((string) $_SERVER['HTTP_USER_AGENT']);

try {
    // Смотрим если клиент прислал какой-то файл https://www.php.net/manual/ru/features.file-upload.post-method.php
    if ($_FILES['attached_file']['tmp_name']) {
        $uploadDir = __DIR__ . '/upload'; // Путь к директории где будут хранится файлы которые нам прислали с формы
        // проверяем есть ли у нас директория куда мы загрузим этот файл и можно ли в нее записывать
        if (is_dir($uploadDir) && is_writable($uploadDir)) {
            $pathInfo = pathinfo($_FILES['attached_file']['name']); // Получаем информацию о файле https://www.php.net/manual/ru/function.pathinfo.php
            $extension = $pathInfo['extension']; // Получаем расширение
            $fileName = md5(uniqid($salt, true))  . '.' . $extension; // Генерируем новое имя для файла так чтобы не перетерать уже существующие файлы с такими же названиями https://www.php.net/manual/ru/function.uniqid.php https://www.php.net/manual/ru/function.md5.php
            move_uploaded_file($_FILES['attached_file']['tmp_name'], $uploadDir . DIRECTORY_SEPARATOR . $fileName); // Копируем файл в директорию хранения с новым именем попутно узнаем константу DIRECTORY_SEPARATOR https://www.php.net/manual/en/dir.constants.php
            $messageModel->setAttachedFile($fileName);
        } else {
            $error = urlencode('Access denied');
            header("Location: http://playground.local/?error=$error");
            exit;
        }
    }
// Сохраняем данные через модель
    $messageRepository = new MessageRepository();
    $messageRepository->save($messageModel);
} catch (Exception $e) { // <- https://www.php.net/manual/ru/class.exception <- https://www.youtube.com/watch?v=YS2tHXIJX7U посмотреть про исключения
    $error = urlencode($e->getMessage());
    header("Location: http://playground.local/?error=$error");
    exit;
}

// Ридиректим обратно на страницу
$success = urlencode('Success massage adding');
header("Location: http://playground.local/?success=$success");



