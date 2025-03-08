Write a menu driven program to perform the following operations on associative arrays:

a) Sort the array by values (changing the keys) in ascending, descending order

b) Also sort the array by values without changing the keys.

c) Filter the odd elements from an array.
<?php
$array=array("apple"=>50, "orange"=>60, "kivi"=>70, "dragonfruit"=>80);
function sortarrayAsc($array){
    asort($array);
    return $array;
}
function sortarrayDsc($array){
    arsort($array);
    return $array;
}
function sortbykeyAsc($array){
    ksort($array);
    return $array;
}
function sortbykeyDsc($array){
    krsort($array);
    return $array;
}
function my_sort($value){
    return $value % 2 !==0;
}
do{
    echo "\nMenu:\n";
    echo "1. sort the array by key Ascending\n";
    echo "2. sort the array by key Descending\n";
    echo "3. sort the array by value Ascending\n";
    echo "4. sort the array by value Descending\n";
    echo "5. filter the odd elements from the array\n";
    echo "6. Exit\n";
    echo"Enter your choice:";
    
    $choice=intval(trim(fgets(STDIN)));
    switch($choice)
    {
        case 1:
            echo "sorted array by key\n";
            print_r(sortbykeyAsc($array));
            break;
        case 2:
            echo "sorted array by key\n";
            print_r(sortbykeyDsc($array));
            break;
            
        case 3:
            echo "sorted array in ascending order by value\n";
            print_r(sortarrayAsc($array));
            break;
        case 4:
            echo "sorted array in descending order by value\n";
            print_r(sortarrayDsc($array));
            break;
        case 5:
            echo "odd elements from the array:\n";
            print_r(sortarrayDsc($array));
            break;
        case 6:
            echo"exiting program.\n";
            break;
        default:
            echo"invalid choice.";


    }
}while($choice !=5);
?>