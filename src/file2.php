<?php




function testEcho2() {
    $array = array("foo", "bar", "hello", "world");

    $arrayShow = var_dump($array);

    var_dump($array);

    echo $arrayShow;
}

$array2 = array("foo", "bar", "hello", "world");