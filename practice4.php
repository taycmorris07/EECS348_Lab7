<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table Result</title>
</head>

<body>
    <h1>Multiplication Table Result</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["number"])) {
        $number = $_POST["number"];

        echo "<h2>Multiplication Table for 1 to $number</h2>";
        echo "<table border='1'>";
        echo "<tr><th>*</th>";

        // Print column indexes (1 to $number)
        for ($i = 1; $i <= $number; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        // Print table rows and row indexes
        for ($i = 1; $i <= $number; $i++) {
            echo "<tr><th>$i</th>";
            for ($j = 1; $j <= $number; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        header("Location: index.php"); // Redirect back to the input page if no input is received
        exit();
    }
    ?>
</body>

</html>
