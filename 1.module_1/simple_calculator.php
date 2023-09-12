
<!-- Task-7 -->

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>

    <form method="post">
        <label for="number1">Enter the first number:</label>
        <input type="text" name="number1" id="number1" required><br><br>

        <label for="operator">Select an operation:</label>
        <select name="operator" id="operator">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br><br>

        <label for="number2">Enter the second number:</label>
        <input type="text" name="number2" id="number2" required><br><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if (isset($_POST['calculate'])) {
      
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operator = $_POST['operator'];

        
        switch ($operator) {
            case 'add':
                $result = $number1 + $number2;
                $operationSymbol = '+';
                break;
            case 'subtract':
                $result = $number1 - $number2;
                $operationSymbol = '-';
                break;
            case 'multiply':
                $result = $number1 * $number2;
                $operationSymbol = '*';
                break;
            case 'divide':
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                    $operationSymbol = '/';
                } else {
                    $result = "Undefined (Division by zero)";
                }
                break;
            default:
                $result = "Invalid operation";
                break;
        }

        echo "<p>Result: $number1 $operationSymbol $number2 = $result</p>";
    }
    ?>
</body>
</html>
