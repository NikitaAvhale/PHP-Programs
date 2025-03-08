<html>
    <body>
        <form method="post">
            Enter a number:<input type="text" name="input">
            <input type="submit" name="submit" value="convert">
</form>
<?php

function  countvowels($string){
    $count=0;


$char=str_split((string)$string);
foreach($char as $char){
    switch($char)
    {
        case"a":
        $count++;
        
        break;
        case"e":
        $count++;
        break;
        case"i":
        $count++;
        break;
        case"e":
        $count++;
        break;
        case"A":
        $count++;
        break;
        case"E":
        break;
        case"I":
        $count++;
        break;
        case"O":
        $count++;
        break;
        case"U":
        break;
    }
}
return $count;
}
$character=$_POST['input'];

    $c=countvowels($character);
    echo"the count:".$c;

?>
