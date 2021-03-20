<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

<?php
    //a variable
    $num = 3;

    //an array

    $numbersArray = array(1,2,3,4,5,6,7,8,9,10);

    echo $numbersArray[1];

    $size = count($numbersArray);
    
    echo $size;

    echo "<p>Array Numbers is size: $size </P>";


    for($count=0; $count<$size; $count++){

        echo "<p> Array [$count] : $numbersArray[$count] </P>";
    }


    

?>

</body>
</html>