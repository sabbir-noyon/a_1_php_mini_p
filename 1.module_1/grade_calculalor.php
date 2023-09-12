

<!-- Task-3 -->

<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <form method="post">
        <label for="score1">Test Score 1:</label>
        <input type="number" id="score1" name="score1" required><br>

        <label for="score2">Test Score 2:</label>
        <input type="number" id="score2" name="score2" required><br>

        <label for="score3">Test Score 3:</label>
        <input type="number" id="score3" name="score3" required><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

       
        $average = ($score1 + $score2 + $score3) / 3;

       
        $grade = '';

        if ($average >= 90) {
            $grade = 'A';
        } elseif ($average >= 80) {
            $grade = 'B';
        } elseif ($average >= 70) {
            $grade = 'C';
        } elseif ($average >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        
        echo "<h3>Results:</h3>";
        echo "Average Score: $average<br>";
        echo "Letter Grade: $grade";
    }
    ?>
</body>
</html>
