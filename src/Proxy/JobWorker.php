<?php

class JobWorker
{
    public function __construct(protected MailInterface $mail)
    {}

    public function execute()
    {
        $this->mail->send();
    }
}