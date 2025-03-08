<form method="post">
    enter first number:<input type="number" name="input"><br><br>
    eneter second number:<input type="number" name="num"><br><br>
    Enter your choice:<br>
   <input type="radio" id="add"name="num2" value="add"> addition:<br><br>
    <input type="radio" id="sub" name="num2" value="sub">Subtraction:<br><br>
    <input type="radio" id="multi" name="num2" value="multi">multiplication:<br><br>
<input type="radio" id="div" name="num2" value="div">division:<br><br>
   <input type="radio"id="mod"  name="num2" value="mod">modulus:<br><br>
   <input type="submit" name="submit" value="submit">
</form>
<?php
function calculate($num1,$num2,$operation='add')
{
switch($operation)
{
    case'add':
       return $num1+$num2;
       break; 
        case'sub':
            return $num1-$num2;
            break; 
            case'multi':
                return  $num1*$num2;
                break; 
    
                case'div':
                
                    return $num1/$num2;
                    break; 

                    case'mod':
                        return $num1%$num2;
                        break; 
                        default:
                        echo"invalid operation";
                        break; 
            }
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
$num1=$_POST['input'];
$num2=$_POST['num'];
$operation=isset($_POST['operation'])?$_POST['operation']:"add";
    
$result=calculate($num1,$num2,$operation);
echo"the result is:".$result."<br>";
echo"first number:$num1". "<br>";
echo"second number:$num2"."<br>";
echo"operation".ucfirst($operation);
echo "result:$result";

}
?>