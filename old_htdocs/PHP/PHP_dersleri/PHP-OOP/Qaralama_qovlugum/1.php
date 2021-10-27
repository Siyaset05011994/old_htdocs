<?php

/*
  yoxlamaq istediyim odur ki , parentdeki metodu child'da override edende ve childdeki eyni adli metodu cagiranda mene onda yazdigim
  mentiqle netice cixarir ya ikisini birlewdirib nese verir ?
*/

class Q1{
   public function test(){
       return 'Q1 test() method';
   }
}

class Q2 extends  Q1{
    public function test(){
        return 'Q2 test() method';
    }
}

$q2=new Q2;
echo $q2->test();

//Videoya diqqetsiz baxdigim ucun bu sual aglima gelib , eslinde override zamani o funksiya sirf bizim yazdigimi kodlara gore iwleyir.
