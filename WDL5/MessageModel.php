<?php
include_once './MessageModelInterface.php';



//class MessageModel implements MessageModelInterface
//{
//
//    public string $senderName;
//    public string $email;
//    public string $message;
//    private string $ip;
//    public string $attachedFile;
//    private string $userAgent;
//
//
//    public function __construct(
//
//        string $senderName,
//        string $email,
//        string $message,
//        string $ip,
//        string $attachedFile,
//        string $userAgent
//    )
//    {
//
//        $this->senderName=$senderName;
//        $this->email=$email;
//        $this->message=$message;
//        $this->ip=$ip;
//        $this->attachedFile=$attachedFile;
//        $this->userAgent=$userAgent;
//    }
//
//
//    public function setSenderName(string $senderName): string{
//        $this->senderName=$senderName;
//    }
//
//    public function setEmail(string $email): string{
//        $this->email=$email;
//    }
//
//    public function setMessage(string $message): string{
//        $this->message=$message;
//    }
//
//    public function setIp(string $ip): string{
//        $this->ip=$ip;
//    }
//
//    public function setAttachedFile(string $attachedFile): string{
//        $this->attachedFile=$attachedFile;
//    }
//
//    public function setUserAgent(string $userAgent): string{
//        $this->userAgent=$userAgent;
//    }
//
//
//
//    public function getSenderName(): string{
//        return $this->senderName;
//    }
//
//    public function getEmail(): string{
//        return $this->email;
//    }
//
//    public function getMessage(): string{
//        return $this->message;
//    }
//
//    public function getIp(): string{
//        return $this->ip;
//    }
//
//    public function getAttachedFile(): string{
//        return $this->attachedFile;
//    }
//
//    public function getUserAgent(): string{
//        return $this->userAgent;
//    }
//
//}
// THIS IS FOR POINT 5
//$messagemodel= new MessageModel(777, $_POST['Name'], $_POST['email'], $_POST['Message'], $_SERVER['SERVER_ADDR'], $_FILES['file'], $_SERVER['HTTP_USER_AGENT']);
//print_r($messagemodel);
//
//$a = $messagemodel->getMessageId();
//echo $a;

class MessageModel implements MessageModelInterface
{

    private string $senderName;
    private string $email;
    private string $message;
    private string $ip;
    private string $attachedFile;
    private string $userAgent;


    public function __construct()
    {

        $this->senderName=$_POST['Name'];
        $this->email=$_POST['email'];
        $this->message=$_POST['Message'];
        $this->ip=$_SERVER['SERVER_ADDR'];
        $this->attachedFile=$_FILES["file"]['name'];
        $this->userAgent=$_SERVER['HTTP_USER_AGENT'];
    }


    public function setSenderName(string $senderName): string{
        $this->senderName=$_POST['Name'];
    }

    public function setEmail(string $email): string{
        $this->email=$_POST['email'];
    }

    public function setMessage(string $message): string{
        $this->message=$_POST['Message'];
    }

    public function setIp(string $ip): string{
        $this->ip=$_SERVER['SERVER_ADDR'];
    }

    public function setAttachedFile(string $attachedFile): string{
        $this->attachedFile=$_FILES["file"]['name'];
    }

    public function setUserAgent(string $userAgent): string{
        $this->userAgent=$_SERVER['HTTP_USER_AGENT'];
    }



    public function getSenderName(): string{
        return $this->senderName;
    }

    public function getEmail(): string{
        return $this->email;
    }

    public function getMessage(): string{
        return $this->message;
    }

    public function getIp(): string{
        return $this->ip;
    }

    public function getAttachedFile(): string{
        return $this->attachedFile;
    }

    public function getUserAgent(): string{
        return $this->userAgent;
    }

}
