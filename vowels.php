<
<form method="post">
    Enter a string:<input type="text" name="input">
    <input type="submit" name="submit" value="count">
</form>
<?php

function countVowels($string){
    $vowelcount=preg_match_all('/[aeiouAEIOU]/',$string);
    return $vowelcount;
}
$string="hello world";
echo "Number of vowels in'$string': ".countvowels($string);
?>