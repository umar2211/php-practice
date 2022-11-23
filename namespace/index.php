<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'products.php';
require 'testing.php';

function wow(){
    echo "Wow from Index File.<br>";

}

$obj = new pro\product();
// $obj1 = new pro\product();

wow();
pro\wow()

?>