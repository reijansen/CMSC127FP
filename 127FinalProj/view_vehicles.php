<?php
include 'db_connection.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Select the database explicitly
$conn->select_db('127fp');

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_vehicle = "SELECT * FROM Vehicles";
$result_vehicle = $conn->query($sql_vehicle);

if ($result_vehicle === FALSE) {
    die("Error executing query: " . $conn->error);
}

// Check if there are any rows
if ($result_vehicle->num_rows > 0) {
    echo "Data fetched successfully.";
} else {
    echo "No data found in the Vehicles table.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ta Shift!</title>
    <link rel="icon" type="image/png" href="images/car_logo.png">
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="images/car_logo.png" alt="Ta Shift!">
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="add_customer.php">New Transaction</a></li>
                <li><a href="vehicle_management.php">Vehicles</a></li>
                <li><a href="rental_management.php">Rental Management</a></li>
                <li><a href="view_vehicles.php">Rentals & Reservations</a></li>
                <li><a href="view_rental_reservations.php">Sales</a></li>
            </ul>
        </nav>
    </header>
    <h2>All Vehicles</h2>
    <table>
        <thead>
            <tr>
                <th>Vehicle ID</th>
                <th>Type</th>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Color</th>
                <th>License Plate</th>
                <th>Daily Rate</th>
                <th>Weekly Rate</th>
                <th>Mileage</th>
                <th>Picture</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result_vehicle->num_rows > 0): ?>
                <?php while ($row = $result_vehicle->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['vehicle_id']); ?></td>
                        <td><?php echo htmlspecialchars($row['type']); ?></td>
                        <td><?php echo htmlspecialchars($row['make']); ?></td>
                        <td><?php echo htmlspecialchars($row['model']); ?></td>
                        <td><?php echo htmlspecialchars($row['year']); ?></td>
                        <td><?php echo htmlspecialchars($row['color']); ?></td>
                        <td><?php echo htmlspecialchars($row['license_plate']); ?></td>
                        <td><?php echo htmlspecialchars($row['daily_rate']); ?></td>
                        <td><?php echo htmlspecialchars($row['weekly_rate']); ?></td>
                        <td><?php echo htmlspecialchars($row['mileage']); ?></td>
                        <td><img src="<?php echo htmlspecialchars($row['PicturePath']); ?>" alt="<?php echo htmlspecialchars($row['model']); ?>"></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="11">No vehicles found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    <footer>
        <p>Copyright &copy; 2024, Ta Shift! All Rights Reserved.</p>
    </footer>
</body>
</html>

<?php
$conn->close();
?>
