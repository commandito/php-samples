<?php

class Messenger {
    public function message($message){
        echo $message;
    }
}

$msgr = new Messenger();
$msgr->message("Hi");
