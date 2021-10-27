<?php

class Valideyn{
    protected $ad_='Huseyn';
}

class Usaq extends Valideyn {

    private $ad;
    private $soyad;

    public function __construct($ad,$soyad)
    {
        $this->ad=$ad;
        $this->soyad=$soyad;
    }

    public function getAdSoyad(){
        return $this->ad.' '.$this->soyad;
    }

    public function getAtaAdi(){
        return $this->ad_;
    }

}

$usaq=new Usaq('Siyaset','Piraliyev');
echo $usaq->getAdSoyad().' '. $usaq->getAtaAdi().' o.';

