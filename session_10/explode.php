<?php
// Explode
//  Split a string by a string

// Method signature:
// explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
// Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string separator.

// Example 1
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
echo $pieces[0]; // piece1
echo $pieces[1]; // piece2

// Example 2
$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user; // foo
echo $pass; // *

/* 
   A string that doesn't contain the delimiter will simply
   return a one-length array of the original string.
*/
$input1 = "hello";
$input2 = "hello,there";
$input3 = ',';
var_dump( explode( ',', $input1 ) );
var_dump( explode( ',', $input2 ) );
var_dump( explode( ',', $input3 ) );

?>