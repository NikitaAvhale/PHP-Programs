Declare array. Reverse the order of elements, making the first element last and last element first and similarly rearranging other array elements. [Hint: array_reverse()]
<?php
$index_array=array("zack","Anthony","salim","raghv");
function reverse($index_array)
{
   $new_array=array_reverse($index_array);
   print_r($new_array);
}
reverse($index_array);
?>