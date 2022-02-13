<?php

interface MessageModelInterface
{
    /**
     * @param int $messageId
     * @return $this
     */
    public function setMessageId(int $messageId): self;

    /**
     * @param string $senderName
     * @return $this
     */
    public function setSenderName(string $senderName): self;

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): self;

    /**
     * @param string $message
     * @return $this
     */
    public function setMessage(string $message): self;

    /**
     * @param string $ip
     * @return $this
     */
    public function setIp(string $ip): self;

    /**
     * @param string $attachedFile
     * @return $this
     */
    public function setAttachedFile(string $attachedFile): self;

    /**
     * @param string $userAgent
     * @return $this
     */
    public function setUserAgent(string $userAgent): self;

    /**
     * @return int
     */
    public function getMessageId(): ?int;

    /**
     * @return string
     */
    public function getSenderName(): string;

    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @return string
     */
    public function getMessage(): string;

    /**
     * @return string
     */
    public function getIp(): ?string;

    /**
     * @return string
     */
    public function getAttachedFile(): ?string;

    /**
     * @return string
     */
    public function getUserAgent(): ?string;
}
