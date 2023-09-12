
<!-- Task-2 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature Converter</title>
   
    
</head>

<body>
    <h1 class="title">Temperature Converter</h1>

    <?php
    
    $temperature = "";
    $conversionType = "celsiusToFahrenheit";
    $result = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $temperature = $_POST["temperature"];
        $conversionType = $_POST["conversionType"];

      
        if ($conversionType == "celsiusToFahrenheit") {
            $result = ($temperature * 9/5) + 32;
        } else {
            $result = ($temperature - 32) * 5/9;
        }
    }
    ?>


    <div class="container">

    <form class="form" method="post" action="">
        <label class="enter-temp" for="temperature">Enter Temperature:</label>
        <input class="input-enter-temp" type="number" name="temperature" id="temperature" value="<?php echo $temperature; ?>" required>
        
       
        <br/>
        <label class="select-conversion" for="conversionType">Select Conversion:</label>
        
        <br/>
        <select class="select-conversion-options" name="conversionType" id="conversionType">
            <option value="celsiusToFahrenheit" <?php if ($conversionType == "celsiusToFahrenheit") echo "selected"; ?>>Celsius to Fahrenheit</option>
            <option value="fahrenheitToCelsius" <?php if ($conversionType == "fahrenheitToCelsius") echo "selected"; ?>>Fahrenheit to Celsius</option>
        </select>
        
        <input class="submit" type="submit" value="Convert">
    </form>

    </div>



    <?php
   
   if ($result !== "") {
    echo "<h2>Result:</h2>";
    if ($conversionType == "celsiusToFahrenheit") {
        echo "$temperature&deg;C is approximately $result&deg;F";
    } else {
        echo "$temperature&deg;F is approximately $result&deg;C";
    }
}
    ?>




    
</body>
</html>