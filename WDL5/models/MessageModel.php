<?php
include_once __DIR__ . './../API/Data/MessageModelInterface.php';

class MessageModel implements MessageModelInterface
{
    /**
     * @var int|null
     */
    private $messageId;

    /**
     * @var string
     */
    private $senderName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $attachedFile;

    /**
     * @var string
     */
    private $userAgent;

    /**
     * @param string $senderName
     * @return MessageModelInterface
     */
    public function setSenderName(string $senderName): MessageModelInterface
    {
        $this->senderName = $senderName;
        return $this;
    }

    /**
     * @param string $email
     * @return MessageModelInterface
     */
    public function setEmail(string $email): MessageModelInterface
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @param string $message
     * @return MessageModelInterface
     */
    public function setMessage(string $message): MessageModelInterface
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @param string $ip
     * @return MessageModelInterface
     */
    public function setIp(string $ip): MessageModelInterface
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @param string $attachedFile
     * @return MessageModelInterface
     */
    public function setAttachedFile(string $attachedFile): MessageModelInterface
    {
        $this->attachedFile = $attachedFile;
        return $this;
    }

    /**
     * @param string $userAgent
     * @return MessageModelInterface
     */
    public function setUserAgent(string $userAgent): MessageModelInterface
    {
        $this->userAgent = $userAgent;
        return $this;
    }

    /**
     * @return string
     */
    public function getSenderName(): string
    {
        return $this->senderName;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @return string
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * @return string
     */
    public function getAttachedFile(): ?string
    {
        return $this->attachedFile;
    }

    /**
     * @return string
     */
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    /**
     * @param int $messageId
     * @return MessageModelInterface
     */
    public function setMessageId(int $messageId): MessageModelInterface
    {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMessageId(): ?int
    {
        return $this->messageId;
    }
}
