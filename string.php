<html>
    <body>
    <h2>Reverse String</h2>
    <form method="post">
        Enter a string:<input type="text" name="input"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    function reverse($str)
    {
        return strrev($str);  
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST['input']; 

        if (empty($str)) {  
            echo "<p>Please enter a string.</p>";
        } else {
            $rev = reverse($str);
            echo "<p>The reverse of string '$str' is: '$rev'</p>";
        }
    }
    ?>
    </body>
</html>
