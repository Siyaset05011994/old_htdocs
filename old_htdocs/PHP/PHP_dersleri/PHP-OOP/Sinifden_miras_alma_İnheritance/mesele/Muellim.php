<?php

include "MektebHeyyeti.php";

class Muellim extends MektebHeyyeti {

    public function __construct($ad,$soyad)
    {
        parent::__construct($ad,$soyad);
    }

    public function getAdSoyad()
    {
        return parent::getAdSoyad();
    }

}

$muellim=new Muellim('Vasif','Memmedov');
echo $muellim->getAdSoyad();
