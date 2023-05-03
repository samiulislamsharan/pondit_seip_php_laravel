<?php 
// implode — Join array elements with a string
// join — Alias of implode()

// Method signature
// implode(string $separator, array $array): string

// Example #1
$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array)); // string(20) "lastname,email,phone"

// Empty string when using an empty array:
var_dump(implode('hello', [])); // string(0) ""

// The separator is optional:
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"

?>