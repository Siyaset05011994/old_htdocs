<?php

if (!function_exists('getArticles')){
    function getArticles($path){
         $data=file_get_contents($path);
         return $data;
    }
}
