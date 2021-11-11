<?php




function testEcho() {
    $array = array("foo", "bar", "hello", "world");

    $arrayShow = var_dump($array);

    var_dump($array);

    echo $arrayShow;
}