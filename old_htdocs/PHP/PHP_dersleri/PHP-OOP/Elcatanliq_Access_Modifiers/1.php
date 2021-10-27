<?php

// Insanin en azi 3 xarakteri olur :  cemiyyetdeki , yaxin etrafindaki ve hamidan gizletdiyi daxili alemi
// Her birini yanliz muvafiq qrupdan olan insanlar gore biler , daha artigini ise icini acdigi insan bile-biler ,
//o da wexsin icaze verdiyi usulda , icaze verdiyi qeder ...

class Xarakter{

    public $cemiyyetdeki_xarakter;
    protected $yaxin_etrafdaki_xarakter;
    private $hamidan_gizletdiyi;

    public function __construct()
    {
        $this->cemiyyetdeki_xarakter='klassik';
        $this->yaxin_etrafdaki_xarakter='qaygikew';
        $this->hamidan_gizletdiyi='bowluq';
    }

    public function  butunXarakterler(){
        return $this->cemiyyetdeki_xarakter.', '.$this->yaxin_etrafdaki_xarakter.', '.$this->hamidan_gizletdiyi;
    }

}

$xarakter=new Xarakter;
//evvelce deyiwenlere catmaga caliwaq
//echo $xarakter->cemiyyetdeki_xarakter; // hamiya elcatan (sinif,sinifden colde ve child siniflerde)
//echo $xarakter->yaxin_etrafdaki_xarakter; // xeta verecek , yanliz sinif icinde ve child siniflerde elcatandir.
//echo $xarakter->hamidan_gizletdiyi; // xeta verecek , yanliz sinif icinde  elcatandir.

//Qeyd : protected property ve metodlara sinifden colde catmaq ucun public bir funksiyadan istifade etmek lazimdir
//Qeyd : private property yaxud metodlara child sinifde catmaq ucun protected metoddan istifade etmekkifayetdir , her yerde elcatan etmek ucun ise public metodu lazimdir