<html>
    <body>
        <form method="post">
            Enter a string:<input type="text" name="input"><br><br>
            <input type="submit" name="submit" value="submit">
</form>
<?php
function palindrome($str)
{
    
    if(strrev($str)==$str)
    {
        echo"the string is plalindrome";
    }else{
        echo"the string is not palindrome";
    }



    
}
$a=$_POST['input '];
palindrome($a);



?>
</body>
</html>
