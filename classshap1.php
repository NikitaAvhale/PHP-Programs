<html>  
<body>     
    <h2>Select a shape</h2>     
    <form method="POST">         
        <input type="radio" id="triangle" name="shape" value="triangle"  required>         
        <label for="triangle">Triangle</label><br>                  

        <input type="radio" id="square" name="shape" value="square"  required>         
        <label for="square">Square</label><br>          

        <input type="radio" id="rectangle" name="shape" value="rectangle"  required>         
        <label for="rectangle">Rectangle</label><br>          

        <input type="radio" id="circle" name="shape" value="circle"  required>         
        <label for="circle">Circle</label><br><br>          
        <br>         
        <input type="submit" value="Calculate Area">     
    </form>     
</body> 
</html>
<?php  
class Shape {         
    public function displayArea() {         
        echo "general";     
    }   
}  
class Triangle extends Shape {     
    public $base;     
    public $height;      

    public function __construct($base, $height) {         
        $this->base = $base;         
        $this->height = $height;     
    }      

    public function displayArea() {         
        $area = 0.5 * $this->base * $this->height;         
        echo "Area of Triangle: " . $area . " square units.";     
    } 
} 
class Square extends Shape {     
    public $side;      

    public function __construct($side) {         
        $this->side = $side;     
    }      

    public function displayArea() {         
        $area = $this->side * $this->side;         
        echo "Area of Square: " . $area . " square units.";     
    } 
}  
class Rectangle extends Shape {     
    public $length;     
    public $width;      

    public function __construct($length, $width) {         
        $this->length = $length;         
        $this->width = $width;     
    }      

    public function displayArea() {         
        $area = $this->length * $this->width;         
        echo "Area of Rectangle: " . $area . " square units.";     
    } 
}  
class Circle extends Shape {     
    public $radius;      
    public function __construct($radius) {         
        $this->radius = $radius;     
    }      
    public function displayArea() {         
        $area = pi() * $this->radius * $this->radius;         
        echo "Area of Circle: " . $area . " square units.";     
    } 
}  
if ($_SERVER["REQUEST_METHOD"] == "POST") {     
    $shape = $_POST['shape'];      
    if ($shape == 'triangle') {         
         $selectedShape = new Triangle(3, 4);     
    } elseif ($shape == 'square') {         
        $selectedShape = new Square(5);     
    } elseif ($shape == 'rectangle') {         
              
        $selectedShape = new Rectangle(4, 5);     
    } elseif ($shape == 'circle') {         
                
        $selectedShape = new Circle(3);     
    }          
    $selectedShape->displayArea(); 
} 
?>