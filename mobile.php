<html>
    <body>
        <form method="POST">
            Enter a number:<input type="number" name="input">
            <input type="submit" name="submit" value="Submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

$mobileno=$_POST["Mobile_no"];
if(!preg_match("/^[0-9]*$/",$mobileno)){
    $ErrMsg="only numeric value is all owed.";
    echo $ErrMsg;
}else
{
    echo $mobileno;

}
}
?>