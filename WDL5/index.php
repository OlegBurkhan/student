<?php
include_once './models/Repository/MessageRepository.php';

$messageRepository = new MessageRepository();
$messagesList = $messageRepository->getList();
$error = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : ''; // <- https://www.php.net/manual/ru/function.htmlspecialchars.php
$success = isset($_GET['success']) ? htmlspecialchars($_GET['success']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WDL-5</title>
    <link rel="stylesheet" type="text/css" href="./styles/base.css">
</head>
<body>
<!-- Выводим ошибку если она есть -->
<?php if ($error): ?>
    <div class="error"><?= $error; ?></div>
<?php endif; ?>

<?php if ($success): ?>
    <div class="success"><?= $success; ?></div>
<?php endif; ?>

<div class="message-form">
    <form action="post.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="sender_name">Enter your Name *</label>
            <input id="sender_name" type="text" name="sender_name" value=""/>
        </div>
        <div>
            <label for="email">Email *</label>
            <input id="email" type="text" name="email" value=""/>
        </div>
        <div>
            <label for="message">Message *</label>
            <textarea id="message" name="message"></textarea>
        </div>
        <div>
            <label for="attached_file">File</label>
            <input id="attached_file" type="file" name="attached_file" value=""/>
        </div>
        <div>
            <button type="submit">Send message</button>
        </div>
    </form>
</div>
<h4>Messages:</h4>
<table>
    <tr>
        <th>Message Id</th>
        <th>Sender Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Ip</th>
        <th>Attached File</th>
        <th>User Agent</th>
    </tr>
    <?php foreach ($messagesList as $message) { ?>
        <tr>
            <td><?= $message['message_id'] ?></td>
            <td><?= $message['sender_name'] ?></td>
            <td><?= $message['email'] ?></td>
            <td><?= $message['message'] ?></td>
            <td><?= $message['ip'] ?></td>
            <td><?= $message['attached_file'] ?></td>
            <td><?= $message['user_agent'] ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>
