<?php

class User{

    public static $username;

    public static function setUsername($username){ //parameter olmasa da olar hali
        self::$username=$username;
    }

    public static function getUsername($username=null){
        if (!$username) $username=self::$username;
        return $username;
    }

}

User::setUsername('siyaset1994');
//echo User::getUsername();// yazdigim wertde oldugu kimi getUsername parametrsiz cagrilanda setUsername'de teyin etdiyim parametr qayidir.
echo User::getUsername('SiyasetPiraliyev'); // burda parametr gonderdim deye null werti odenmedi ve gonderdiyim parametri qaytardi