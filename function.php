<?php
function factorial($number)
{
    $fact=1;
    for($i=1;$i<=$number;$i++)
    {
        $fact*=$i;

    }
    echo "the factorial of number  $number is:".$fact;
}
factorial(5);
?>