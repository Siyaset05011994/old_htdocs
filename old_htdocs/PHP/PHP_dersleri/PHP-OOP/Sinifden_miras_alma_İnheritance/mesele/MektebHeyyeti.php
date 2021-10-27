<?php

class MektebHeyyeti{

    protected $ad;
    protected $soyad;

    protected function __construct($ad,$soyad){
        $this->ad=$ad;
        $this->soyad=$soyad;
    }

    protected function getAdSoyad(){
        return $this->ad.' '.$this->soyad;
    }
}
