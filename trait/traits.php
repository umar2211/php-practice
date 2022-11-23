<?php
trait hello{
    public function sayhello(){
        echo "Hello EveryOne<br>";
    }
    public function sayhi(){
        echo "Hi! EveryOne<br>";
    }
}
trait bye{
    public function saybye(){
        echo "bye bye EveryOne";
    }
}
class base {
    use hello,bye;
}

class base2{
    use hello;
}
$test = new base();
$test->sayhello();
$test->sayhi();
$test->saybye();
?>