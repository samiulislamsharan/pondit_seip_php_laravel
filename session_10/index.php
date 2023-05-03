<?php
    $headline = "The Cow";
    $paragraph = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";

    $variable1 = "This is Variable 1";
    $variable2 = "This is Variable 2";

    // var_dump($headline);

    // functions
    function my_function($p1, $p2){
        echo $p1 + $p2 . "<br>";
    }

    function another_function(){
        echo "this is another_function" . "<br>";
    }

    my_function(1, 1);
    another_function();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <h1><?php echo $headline; ?></h1>
    <p><?php echo $paragraph; ?></p>

    <?php 
        echo $variable1;
        echo $variable2;
    ?>
</body>
</html>