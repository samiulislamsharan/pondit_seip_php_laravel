<?php
$age = 50;
$favourite_site = 'Code';
$fruits = array('apple', 'banana', 'orange', 'grapes');
$employee = array('name' => 'John Smith', 'age' => 30, 'profession' => 'Software Engineer');


if ($age > 30)
    echo "Your age is greater than 30!";


    switch ($favourite_site) {
    case 'Business':
        echo "My favourite site is business.tutsplus.com!";
        break;
    case 'Code':
        echo "My favourite site is code.tutsplus.com!";
        break;
    case 'Web Design':
        echo "My favourite site is webdesign.tutsplus.com!";
        break;
    case 'Music':
        echo "My favourite site is music.tutsplus.com!";
        break;
    case 'Photography':
        echo "My favourite site is photography.tutsplus.com!";
        break;
    default:
        echo "I like everything at tutsplus.com!";
}

foreach ($fruits as $fruit)
{
  echo $fruit;
  echo "<br/>";
}

foreach ($employee as $key => $value)
{
  echo sprintf("%s: %s</br>", $key, $value);
  echo "<br/>";
}
