<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>


<?php

    $grade = 'D';

    switch($grade) {
     Case 'A': 
        echo 'You are a superstar';
        break;
    Case 'B':
        echo 'You are a loser';
        break;
    default:{
        echo 'Maxine ';
    
        break;
    }
    }

?>
    
</body>
</html>