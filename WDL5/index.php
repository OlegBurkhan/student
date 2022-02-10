<?php
//include_once "DB.php";
//include_once './MessageModel.php';
//include_once './MessageRepository.php';
//
//
//if ($_POST) {
//    echo '<pre>';
//    echo htmlspecialchars(print_r($_POST, true));
//    echo '</pre>';
//}
//if ($_FILES) {
//    echo '<pre>';
//    echo htmlspecialchars(print_r($_FILES, true));
//    echo '</pre>';
//}
//
//if ($_SERVER) {
//    echo '<pre>';
//    echo htmlspecialchars(print_r($_SERVER, true));
//    echo '</pre>';
//}
//$messagemodel= new MessageModel(123, $_POST['Name'], $_POST['email'], $_POST['Message'], $_SERVER['SERVER_ADDR'], $_FILES['file'], $_SERVER['HTTP_USER_AGENT']);
//
//MessageRepository::saveToTable($messagemodel);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WDL-5</title>
    <link rel="stylesheet" type="text/css" href="./styles/base.css">
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label>
        <input type="text" name="Name" value=""/>
    </label>Enter your Name<br/>
    <label>
        <input type="text" name="email" value=""/>
    </label>Enter your email<br/>
    <label>
        <input type="text" name="Message" value=""/>
    </label>Enter your message<br/>
<input type="file" name="file" value=""/><br/>
<input type="submit" value="Send message"/><br/>
</form>


<?php
include_once "DB.php";
include_once './MessageModel.php';
include_once './MessageRepository.php';


if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
if ($_FILES) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_FILES, true));
    echo '</pre>';
}

if ($_SERVER) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_SERVER, true));
    echo '</pre>';
}



$messagemodel= new MessageModel();

MessageRepository::setIntegers($messagemodel);


$messagesFromDatabase = new MessageRepository();


$messagesList = $messagesFromDatabase->getMessages();

?>


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
