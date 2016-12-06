<?php

namespace Dashboard\Mail;

class Mailer
{
    protected $view;
    protected $mailer;
    protected $app;


    public function __construct($app, $mailer)
    {
        $this->view = $app->view;
        $this->mailer = $mailer;
        $this->app = $app;
    }

    public function send($template, $data, $callback)
    {


        $message = new Message($this->mailer);

        $this->view->appendData($data);
        $message->body($this->view->render($template));

        call_user_func($callback, $message);

        if(!$this->mailer->Send()) {
            $app->logger->error("Mail not sent",$this->mailer->ErrorInfo);
            //echo 'Message was not sent.';
            //echo 'Mailer error: ' . $this->mailer->ErrorInfo;
        } else {
            echo 'Message has been sent.';
            //$app->logger->debug("Mail has been sent");
        }

        $this->mailer->send();
    }
}

 ?>
