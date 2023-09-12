
<!-- Task-4 -->

<!DOCTYPE html>
<html>
<head>
    <title>Even or Odd Checker</title>
</head>
<body>
    <h2>Even or Odd Checker</h2>

    <?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $number = $_POST["number"];

       
        if ($number % 2 == 0) {
            $result = "even";
        } else {
            $result = "odd";
        }

       
        echo "<p>The number $number is $result.</p>";
    }
    ?>

    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="number">Enter a number:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Check</button>
    </form>
</body>
</html>
