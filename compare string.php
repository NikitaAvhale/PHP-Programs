<form method="post">
        <label>Enter First String:</label>
        <input type="text" name="str1" required><br><br>
        
        <label>Enter Second String:</label>
        <input type="text" name="str2" required><br><br>

        <label>Enter Position to Reverse First String:</label>
        <input type="number" name="pos" min="0" required><br><br>
        <input type="radio" name="rev_str" value="beginning">beginning<br>
        <input type="radio" name="rev_str" value="middle">middle<br>
        <input type="radio" name="rev_str" value="end">end<br>
        <input type="submit" name="submit" value="Submit">
        
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];
        $pos = (int) $_POST['pos']; 

        
        
       function compare($str1,$str2){
        if ($str1 == $str2) {
            echo " Strings are equal.";
        } else {
            echo "Strings are NOT equal.";
        }
    }
        compare($str1,$str2);
        function compare_str($str1,$str2){
        $compare = strcmp($str1, $str2);
        if ($compare == 0) {
            echo " Strings are equal.";
        } elseif ($compare < 0) {
            echo " First string is less than the second string.";
        } else {
            echo "First string is greater than the second string.";
        }
    }
    compare_str($str1,$str2);
        function append($str1,$str2){
        $appended = $str1 . $str2;
        echo "$appended";
        }
        append($str1,$str2);
      
        if ($pos >= 0 && $pos < strlen($str1)) {
            $reversed_part = strrev(substr($str1, $pos)); 
            $result = substr($str1, 0, $pos) . $reversed_part;
            echo "<h3>Reversed First String   $pos:</h3><p>$result</p>";
        } else {
            echo "Invalid position entered. ";
        }
     
    }
    ?>