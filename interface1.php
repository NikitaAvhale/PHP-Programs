<?php

define('PI','3.14');
interface Shape {
   
    
    
    public function area();
    
    
    public function volume();
}

class Cylinder implements Shape {
    private $radius;
    private $height;
    
    public function __construct($radius, $height) {
        $this->radius = $radius;
        $this->height = $height;
    }
    
    public function area() {
        $a= 2*PI * $this->radius * ($this->radius + $this->height);
        return $a;
    }
    
    public function volume() {
        $b=PI * $this->radius * $this->radius * $this->height;
        return $b;
    }
}

$l=readline("enter radius");
$h=readline("enter height");
$cylinder = new Cylinder($l, $h);
echo "Area of the cylinder: " . $cylinder->area() . " square units\n";
echo "Volume of the cylinder: " . $cylinder->volume() . " cubic units\n";

?>
