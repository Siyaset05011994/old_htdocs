<?php

 class Mehsul{

     public $ad;
     public $qiymet;
     public $kutle;
     const CLASS_ADI='Mehsul';


     public function setAd($ad){
        $this->ad=$ad;
     }

     public function getAd(){
        return $this->ad;
     }

     public function setQiymet($qiymet){
         $this->qiymet=$qiymet;
     }

     public function getQiymet(){
         return $this->qiymet;
     }

     public function setKutle($kutle){
         $this->kutle=$kutle;
     }

     public function getKutle(){
         return $this->kutle;
     }

     public function yekunQiymet(){
         return $this->kutle*$this->qiymet;
//         return $this->getKutle()*$this->getQiymet(); // bu cur de hesablamaq olar .
     }

     public function classAdi(){
         return $this::CLASS_ADI;
     }

 }

 $mehsul=new Mehsul; // constructoru parametr teleb eden wekilde yazsa idim new Mehsul() kimi cagiracagdim .
// echo $mehsul::CLASS_ADI;  // const deyiweni bele cagirmaq olur
// echo Mehsul::CLASS_ADI;  // const deyiweni bele de cagirmaq olur
// echo $mehsul->classAdi();  // const deyiweni bele de cagirmaq olur
 $mehsul->setAd('Düyü'); // adi gonderirem .
// echo $mehsul->getAd(); // gonderdiyim adi getirirem .
 $mehsul->setQiymet(3);
 $mehsul->setKutle(2);
 echo $mehsul->yekunQiymet();