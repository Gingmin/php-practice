<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FUNCTION</title>
</head>
<body>
    <h1>function</h1> 
    <?php 
    $str = "Lorem ipsum 
    
    dolor sit amet";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php 
    echo nl2br($str);
    ?>

    <?php
    function sum($left, $right) {
        print($left + $right);
        print("<br>");
    }
    sum(2, 5);
    sum(10, 5);
    ?>

</body>
</html>