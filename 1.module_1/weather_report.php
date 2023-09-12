
<!-- Task-5 -->


<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h2>Weather Report</h2>

    <?php
   
    $temperature = 20; 
   
    if ($temperature < 0) {
        $message = "It's freezing!";
    } elseif ($temperature >= 0 && $temperature < 15) {
        $message = "It's cool.";
    } elseif ($temperature >= 15 && $temperature < 25) {
        $message = "It's warm.";
    } else {
        $message = "It's hot!";
    }

  
    echo "<p>Temperature: $temperature&deg;C</p>";
    echo "<p>$message</p>";
    ?>
</body>
</html>
