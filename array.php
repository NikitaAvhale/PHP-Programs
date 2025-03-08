<?php
$name_one = array("Zack","Anatomy","Ram","Salim","raghav");
echo"Accessing the 1st array element directly:\n";
echo $name_one[0],"\n";
echo $name_one[1],"\n";
echo $name_one[2],"\n";
echo $name_one[3],"\n";
print_r($name_one);
echo "Looping using foreach:\n";
foreach($name_one as $val){
    echo $val. "\n";

}
$round = count($name_one);
echo "\n The number of elements are $round \n";
echo "Looping using for:\n";
for($n=0; $n< $round; $n++){
    echo $name_one[$n],"\n";
}
?>