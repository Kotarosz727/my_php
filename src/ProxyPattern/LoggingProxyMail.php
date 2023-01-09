<?php

class LoggingProxyMail implements MailInterface
{
    public function __construct(
        protected LoggingInterface $loger,
        protected MailInterface $mail
    )
    {}

    public function send()
    {
        $this->loger->logging();
        $this->mail->send();
    }

}