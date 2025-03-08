//menu driven assosiated array
//a) Reverse the order of each elementskey value pair.
//b) traverse the element in an array in random order

<?php
$assoc_array=array("apple"=>10,"banana"=>20,"cherry"=>30,"date"=>40);
function reverse_key_value($array) 
{
    return array_flip($array);
}
function traverse($array)
{
    shuffle($array);
    foreach($array as $key=>$value)
    {
        echo"$key:$value\n";

    }
}

function menu()
{
    global $assoc_array;
    while(true)
    {
        echo"\nMenu:\n";
        echo "1.Reverse the order\n";
        echo"2.Traverse the element in random order:";
        echo"3.Exit\n";
        $choice=readline("Enter your choice(1/2/3):");
        switch($choice)
        {
            case 1:
                echo "Reverse key - value pairs:\n";
                $reversedarray=reverse_key_value($assoc_array);
                print_r($reversedarray);
                break;
                case 2: 
                    echo "array traverse in random order\n";
                    traverse($assoc_array);  
                    break;
                    case 3:
                        echo"Exiting the program.\n";
                        exit();
                        default:
                        echo"Invalid choice.Please try again.\n";
                        break;

        }
    }
}
menu();
?>