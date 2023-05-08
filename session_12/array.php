<?php
// An array can be created using the array() language construct. It takes any number of comma-separated key => value pairs as arguments.

// The key can either be an int or a string. The value can be of any type.
/*
 array(
    key  => value,
    key2 => value2,
    key3 => value3,
    ...
)
 */

$array_1 = array(
    "foo" => "bar",
    "bar" => "foo",
);

// Using the short array syntax
$array_2 = [
    "foo" => "bar",
    "bar" => "foo",
];

foreach ($array_1 as $element) {
    echo $element;
    echo "<br/>";
}

$array_3 = array(
    1    => 'a',
    '1'  => 'b', // the value "a" will be overwritten by "b"
    1.5  => 'c', // the value "b" will be overwritten by "c"
    -1 => 'd',
    '01'  => 'e', // as this is not an integer string it will NOT override the key for 1
    '1.5' => 'f', // as this is not an integer string it will NOT override the key for 1
    true => 'g', // the value "c" will be overwritten by "g"
    false => 'h',
    '' => 'i',
    null => 'j', // the value "i" will be overwritten by "j"
    'k', // value "k" is assigned the key 2. This is because the largest integer key before that was 1
    2 => 'l', // the value "k" will be overwritten by "l"
);

// var_dump($array_1);
var_dump($array_3);
