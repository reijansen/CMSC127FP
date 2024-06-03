<?php
include 'db_connection.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vehicle_id = $_POST["vehicle_id"];

    $sql = "SELECT * FROM Vehicles WHERE vehicle_id = '$vehicle_id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Model: " . htmlspecialchars($row["model"]) . " - Year: " . htmlspecialchars($row["year"]) . " - Type: " . htmlspecialchars($row["type"]) . "<br>";
        }
    } else {
        echo "0 results";
    }
}

$conn->close();
?>
