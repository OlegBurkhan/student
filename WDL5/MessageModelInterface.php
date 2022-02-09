<?php

interface MessageModelInterface
{

    public function setSenderName(string $senderName): string;

    public function setEmail(string $email): string;

    public function setMessage(string $message): string;

    public function setIp(string $ip): string;

    public function setAttachedFile(string $attachedFile): string;

    public function setUserAgent(string $userAgent): string;


    public function getSenderName(): string;

    public function getEmail(): string;

    public function getMessage(): string;

    public function getIp(): string;

    public function getAttachedFile(): string;

    public function getUserAgent(): string;
}
