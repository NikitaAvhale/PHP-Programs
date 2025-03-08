Write a menu driven program to perform the following queue related operations

a) Insert an element in queue

b) Delete an element from queue

c) Display the contents of queue
<?php
function insert(&$queue, $element) {
    array_unshift($queue, $element);  
    echo "Element $element inserted into the queue.\n";
}
function delete(&$queue) {
    
        $removed_element = array_shift($queue); 
        echo "Element $removed_element removed from the queue.\n";
    
}
function display($queue) {
    if (empty($queue)) {
        echo "Queue is empty.\n";
    } else {
        echo "Current Queue: " . implode(", ", $queue) . "\n";
    }
}

function main() {
    $queue = [];

    while (true) {
       
        echo "\nMenu:\n";
        echo "1. Insert element into queue\n";
        echo "2. Delete element from queue\n";
        echo "3. Display queue\n";
        echo "4. Exit\n";
        
        
        $choice = (int)readline("Enter your choice: ");
        
        switch ($choice) {
            case 1:
                $element = (int)readline("Enter element to insert: ");
                insert($queue, $element);
                break;
            case 2:
                delete($queue);
                break;
            case 3:
                display($queue);
                break;
            case 4:
                echo "Exiting the program.\n";
                exit;
            default:
                echo "Invalid choice. Please try again.\n";
        }
    }
}
main();
?>