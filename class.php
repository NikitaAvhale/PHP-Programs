<?php
class student{
    public $name;
     public function accept($n){
        $this->name=$n;
     }

     function display()
     {
        echo"name".$this->name;
     }
}

$n1="gopal";
$emp=new student();

$emp->accept($n1);
$emp->display();
?>