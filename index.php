<?php

$Usertext="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis molestiae magnam maxime doloribus aliquam laudantium, eaque expedita, fugit maiores iure repellat, voluptatum hic consequuntur? Ipsa explicabo rerum maxime soluta perferendis.";

$text=$_GET['text'];

$Usertextcensured  = str_replace($text,'***' ,$Usertext)
//var_dump($Usertextcensured);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BADWORD</title>
</head>
<body>
    <p>
        <?php
        echo $Usertext;
         ?>
    </p>
    <p> 
        Lunghezza paragrafo con gli spazi contati è: 
        <?php
        echo strlen($Usertext);
        ?> caratteri
    </p>
        <p>
        <?php
        echo $Usertextcensured;
         ?>
    </p>
    <p> 
        Lunghezza paragrafo è: 
        <?php
        echo strlen($Usertextcensured);
        ?> caratteri
    </p>


</body>
</html>