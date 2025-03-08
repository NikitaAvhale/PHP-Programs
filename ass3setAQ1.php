//menu driven program
//a) display the element of array along with the key
//b) display the size of array
<?php
 $assoc_array=array(
    "apple"=>10,
    "banana"=>20,
    "cherry"=>30,
    "date"=>40
 );
 function display_elements($array){
    echo "\nElement of the associative array along with the key:\n";
    foreach($array as $key => $value){
        echo "$key $value\n";
    }
 }
 function display_size($array){
    $size = count($array);
    echo "\nSize of the associative array: $size\n";
 }
 function menu(){
    global $assoc_array;
    while(true){
        echo "\nMenu:\n";
        echo "1.display eelement of the array along with the key\n";
        echo "2. display the size of array\n";
        echo "3.Exit\n";
        $choice = readline("enter your choice(1/2/3):");
        switch($choice){
            case 1:
                display_elements($assoc_array);
            break;
            case 2:
                display_size($assoc_array);
                break;
                case 3:
                    echo"existing the program.\n";
                    exit();
                    default:
                    echo "invalid choice. please try again.\n";
                    break;

        }
    }
 }
 menu();
?>


