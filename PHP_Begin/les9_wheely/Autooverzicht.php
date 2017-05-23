<?php

class Autooverzicht {

    private $autoos = array();

    public function voegAutoToe($auto) {
        $this->autoos[] = $auto;
    }

    public function getGefilterdeLijst() {

    }

    public function getAutoLijst() {
        sort($this->autoos);
        return $this->autoos;
    }





}