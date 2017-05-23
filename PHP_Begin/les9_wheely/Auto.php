<?php

class Auto {

    private $merk;
    private $type;
    private $prijs;
    private $url;

    function __construct($merk, $type, $prijs, $url) {
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->url = $url;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function setMerk($merk)
    {
        $this->merk = $merk;
        return $this;
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }


    public function getPrijs()
    {
        return $this->prijs;
    }

    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;
        return $this;
    }


    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }










}