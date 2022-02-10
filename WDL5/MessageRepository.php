<?php
//include_once './MessageModel.php';
//
//class MessageRepository
//{
//
////    private int $messageId;
//    public string $senderName;
//    public string $email;
//    public string $message;
//    private string $ip;
//    public string $attachedFile;
//    private string $userAgent;
//    public array $messagemodel;
//
//
//    public static function setIntegers(){
//
//
//        $messagemodel= new MessageModel($_POST['Name'], $_POST['email'], $_POST['Message'], $_SERVER['SERVER_ADDR'], $_FILES["file"]['name'], $_SERVER['HTTP_USER_AGENT']);
//
//
//    if ($messagemodel instanceof MessageModel) {
//
//        $host = 'localhost';
//        $user = 'root';
//        $password = '';
//        $dbname = 'WDL5_db';
//
////Set DSN
//
//        $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
//
////Create a PDO instance
//
//        $pdo = new PDO($dsn, $user, $password);
//
////        $messageId = $messagemodel->getMessageId();
//        $senderName = $messagemodel->getSenderName();
//        $email = $messagemodel->getEmail();
//        $message = $messagemodel->getMessage();
//        $ip = $messagemodel->getIp();
//        $attachedFile = $messagemodel->getAttachedFile();
//        $userAgent = $messagemodel->getUserAgent();
//
//        $sql = 'INSERT INTO messages(sender_name, email, message, ip, attached_file,
//   user_agent) VALUES(:sender_name, :email, :message, :ip, :attached_file, :user_agent)';
//        $stmt = $pdo->prepare($sql);
//        $stmt->execute(['sender_name' => $senderName, 'email' => $email,
//            'message' => $message, 'ip' => $ip, 'attached_file' => $attachedFile, 'user_agent' => $userAgent]);
//    }
//
//    }
//
//}

include_once './MessageModel.php';
include_once "DB.php";

class MessageRepository
{

    private string $senderName;
    private string $email;
    private string $message;
    private string $ip;
    private string $attachedFile;
    private string $userAgent;
    private array $messagemodel;
    private $db;


    public function __construct()
    {
        $this->db = Database::getInstance();
    }


    public static function setIntegers(){


        $messagemodel= new MessageModel();
        $db= Database::getInstance();


        if ($messagemodel instanceof MessageModel) {

            $senderName = $messagemodel->getSenderName();
            $email = $messagemodel->getEmail();
            $message = $messagemodel->getMessage();
            $ip = $messagemodel->getIp();
            $attachedFile = $messagemodel->getAttachedFile();
            $userAgent = $messagemodel->getUserAgent();

            $sql = 'INSERT INTO messages(sender_name, email, message, ip, attached_file,
   user_agent) VALUES(:sender_name, :email, :message, :ip, :attached_file, :user_agent)';
            $stmt = $db->getDB()->prepare($sql);
            $stmt->execute(['sender_name' => $senderName, 'email' => $email,
                'message' => $message, 'ip' => $ip, 'attached_file' => $attachedFile, 'user_agent' => $userAgent]);
        }

    }

    public function getMessages(): array
    {
        return $this->db->getDB()->query("SELECT * FROM messages")->fetchAll() ?? [];
    }


}









