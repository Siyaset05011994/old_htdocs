<?php

 trait Test_{
   public function salam(){
       return 'salam';
   }
   public function necesen(){
       return ' necesen?';
   }
 }

 trait Test2_{
   public function dunya(){
       return ' dunya';
   }
   public function necesen(){
       return ' nasilsin ?';
   }
 }

 class Test3_{

   use Test_,Test2_{
       Test_::necesen insteadof Test2_; //burda Test_'in necesen metodundan istifade edeceyimi bildirdim . Men $this->necesen yazanda onu getirecek .
       Test2_::necesen as turkce_necesen; // herweye regmen Test2_ necesen metodunu istifade etmek istesem de , adini as ile deyiwirem .
   }

   public function __construct(){
       echo $this->salam().$this->dunya().$this->necesen() .' ( '.$this->turkce_necesen().' ) ';
   }

 }

 $test3=new Test3_;
