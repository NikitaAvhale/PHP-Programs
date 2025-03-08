<html>
    <body>
        <form method="post">
            Enter a number:<input type="number" name="input">
            <input type="submit" name="submit" value="convert">
</form>
<?php
$number=$_POST['input'];
$digits=str_split((string)$number);
foreach($digits as $digit){
    switch($digit)
    {
        case"1":echo"one";
        break;
        case"2":echo"two";
        break;
        case"3":echo"three";
        break;
        case"4":echo"four";
        break;
        case"5":echo"five";
        break;
        case"6":echo"six";
        break;
        case"7":echo"seven";
        break;
        case"8":echo"eight";
        break;
        case"9":echo"nine";
        break;
    }
    
    echo" ";
}
?>
