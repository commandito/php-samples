<?php

trait Translate {
    public static $messages = ['hi' => 'selam', 'how' => 'nasıl', 'world' => 'dünya'];

    private function translateToTR($message) {
        return Translate::$messages[$message];
    }

}

trait Length {
    private function len($message) {
        return strlen($message);
    }
}

class Messenger {
    use Translate;
    use Length;
    
    public function message($msg) {
        $m = $this->translateToTR($msg);
        $l = $this->len($m);
        echo $m . "($l)";
    }
}

$msgr = new Messenger();
$msgr->message('hi');