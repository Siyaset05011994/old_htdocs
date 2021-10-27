<?php

namespace Call_User_Func;

class ClassIstifadesi{

    public static function get(){
        echo 'get metodu' ;
    }
    public function test(){
        echo 'test metodu';
    }
    public function withParameter($array){
        print_r($array);
    }
    public static function withParameterStatic(array $array){
        echo implode(' ',$array);
    }
}

//call_user_func_and_call_user_func_array([new ClassIstifadesi,'test']);//adi metod istifadesi.
//call_user_func_and_call_user_func_array([__NAMESPACE__.'\ClassIstifadesi','get']); // static metod istifade usulu. arrayin 1-ci terefi namespace+class_adi , 2-ci terefi ise metod adi
//call_user_func_and_call_user_func_array([new ClassIstifadesi,'withParameter'],['Salam','Dunya','Necesen']);
call_user_func([__NAMESPACE__.'\ClassIstifadesi','withParameterStatic'],['Salam','Dunya','Necesen']);