<?php

class A{
    public static $name = "Umar Khalid";
    public static function show(){
        echo self::$name;
    }
    public function __construct(){
        self::show();
    }
}

// echo A::$name;
// A::show();
$test = new A ();
$test->show();


?>