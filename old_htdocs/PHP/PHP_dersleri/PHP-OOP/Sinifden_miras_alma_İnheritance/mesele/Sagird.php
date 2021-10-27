<?php

include "MektebHeyyeti.php";

class Sagird extends MektebHeyyeti {

    public function __construct($ad,$soyad)
    {
        parent::__construct($ad,$soyad); // parent sinifin constructorundan istifade etdiyim ucun onun constructoruna aid parametrleri gonderirem .
    }

    public function getAdSoyad()
    {
        return parent::getAdSoyad(); // eger miras alinan sinifde valideyn sinifdeki ile eyni adda metod varsa valideynden metod almaq ucun parent'den istifade edirik.
    }

}

$sagird=new Sagird('Siyaset','Piraliyev');
echo $sagird->getAdSoyad();

