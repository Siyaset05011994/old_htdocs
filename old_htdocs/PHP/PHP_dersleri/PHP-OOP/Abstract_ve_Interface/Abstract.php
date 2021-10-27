<?php

class te{
    public function ta(){

    }
}

abstract class Page extends te {
    abstract public function test();
}

class Blog extends Page {

//    private function test() // bu halda sehv verecek , cunki toreme sinif metodu eyni adli abstract metoddan daha cox mehdudlawib
//    {
//
//    }

   public function test()
   {
       // TODO: Implement test() method.
   }

   public function test2(){

   }

}

$blog=new Blog;
echo $blog->test();
