<html>
    <body>
    <h2>Reverse String</h2>
<form method="post">
    Enter a string:<input type="text" name="input"><br><br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
function reverse($str)
{
    $srev=strrev($str);
    echo $srev;  
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $str=$_POST['input'];
    if($str<0)
    {
        echo"<p>PLease entera string:</p>";

    }else{
        $rev=reverse($str);
        echo"<p>the reverse of string $str is:$rev</p>";
    }
}
?>