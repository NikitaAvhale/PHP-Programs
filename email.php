
<html>
<head>
    
    <title>Email Validation Form</title>
</head>
<body>
    <h2>Enter your email address:</h2>
    <form method="post" action="">
        <label for="email">Email address:</label>
        <input type="text" id="email" name="email" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    function validate_email($email) {
       
        if (substr_count($email, '@') != 1) {
            return "Invalid email: The '@' symbol should appear exactly once.";
        }

        $email_parts = explode('@', $email);
        $local_part = $email_parts[0];
        $domain_part = $email_parts[1];
        if (preg_match('/^[0-9_\.@]/', $local_part)) {
            return "Invalid email: The local part should not start with a digit, underscore, dot, or '@'.";
        }
        if (preg_match('/[\.]{2,}/', $local_part)) {
            return "Invalid email: The local part should not contain consecutive dots.";
        }
        if (strpos($local_part, '.') !== false && substr_count($local_part, '.') > 1) {
            return "Invalid email: Only one dot is allowed before the '@' symbol.";
        }
        if (!preg_match('/\.[a-zA-Z]{2,}$/', $domain_part)) {
            return "Invalid email: The domain part should have a valid domain name with at least one dot.";
        }

        return "Email is valid!";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $validation_message = validate_email($email);
        echo $validation_message;
    }
    ?>

</body>
</html>
