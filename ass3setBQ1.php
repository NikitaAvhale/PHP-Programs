Declare a Multidimensional Array. Display specific element from a Multidimensional array. Also delete given element from the Multidimensional array (After each operation display array content.
<?php
$cars=array(
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
echo $cars[0][1];
unset($cars[0][1]);
print_r($cars);
?>