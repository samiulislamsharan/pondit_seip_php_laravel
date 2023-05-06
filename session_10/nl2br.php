<?php
// nl2br — Inserts HTML line breaks before all newlines in a string

// Method Signature
// nl2br(string $string, bool $use_xhtml = true): string

// Example #1
echo nl2br("foo isn't\n bar\n");

// Example #2
echo nl2br("Welcome\r\nThis is my HTML document\n", false);

// Example #3
$string = "This\r\nis\n\ra\nstring\r";
echo nl2br($string);
?>