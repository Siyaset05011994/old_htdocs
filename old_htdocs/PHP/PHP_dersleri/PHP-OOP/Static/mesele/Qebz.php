<?php

class Qebz{

    private $mehsulun_adi;
    private $mehsulun_kutlesi;
    private $mehsulun_kiloqram_qiymeti;
    private $her_mehsulun_yekun_qiymet;
    static  $yekunQiymet;

    public function setMehsulunAdi($mehsulun_adi){
        $this->mehsulun_adi=$mehsulun_adi;
    }

    public function getMehsulunAdi(){
        return $this->mehsulun_adi;
    }

    public function setMehsulunKutlesi($mehsulun_kutlesi){
        $this->mehsulun_kutlesi=$mehsulun_kutlesi;
    }

    public function getMehsulunKutlesi(){
        return $this->mehsulun_kutlesi;
    }

    public function setMehsulunKiloqramQiymeti($mehsulun_kiloqram_qiymeti){
        $this->mehsulun_kiloqram_qiymeti=$mehsulun_kiloqram_qiymeti;
    }

    public function getMehsulunKiloqramQiymeti(){
        return $this->mehsulun_kiloqram_qiymeti;
    }

    public function getHerMehsulunYekunQiymeti(){
        $this->her_mehsulun_yekun_qiymet=$this->mehsulun_kutlesi*$this->mehsulun_kiloqram_qiymeti; //her mehsulun yekun qiymetini hesablayandan sonra yekunQiymeti set edirem ki her qiymeti ustune gelsin .
        $this->setYekunQiymet();
        return $this->her_mehsulun_yekun_qiymet;
    }

    public function setYekunQiymet(){
        self::$yekunQiymet+=$this->her_mehsulun_yekun_qiymet;
    }


}