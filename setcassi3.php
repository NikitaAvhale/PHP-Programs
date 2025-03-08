<?php
function sortArrayAscending($array){
    asort($array);
    return $array;
}
function sortArrayDescending($array){
    arort($array);
    return $array;
}

function sortByKeyAscending($array){
    ksort($array);
    return $array;
}

function sortByKeyDescending($array){
    krsort($array);
    return $array;
}

function my_sort($value){
    return $value % 2 !==0;
}

$array = [
    "a" => 2,
    "b" => 5,
    "c" => 9,
    "d" => 4,
    "e" => 3,
];

do{                 
    echo"\nMenu: \n";
    echo"1.sort the array by keys ascending\n";
    echo"2.sort the array by keys descending\n";
    echo"3.sort the array by values ascending\n";
    echo"4.sort the array by values descending\n";
    echo"5.filter the odd element from array\n";
    echo"6:Exit";
    echo "enter your choice:";
    $choice = intval(trim(fgets(STDIN)));

  switch($choice){
  case 1:
    echo "sorted array by keys:\n";
    print_r(sortByKeysAscending($array));
    break;
 case 2:
    echo "sorted array by keys:\n";
    print_r(sortByKeysDescending($array));
    break;
case 3:
    echo "sorted array  in ascending order by values:\n";
    print_r(sortArrayAscending($array));
    break;
case 4:
    echo "sorted array  in descending order by values:\n";
    print_r(sortArrayDescending($array));
    break;
case 5:
    echo"odd elements from the array:\n";
    print_r(array_filter($array, 'my_sort'));
    break;
case 6:
    echo"existing...\n";
    brteak;
default:
echo "invalidx choice. please  try again.\n";
 }
}
while($choice != 5);
?>

