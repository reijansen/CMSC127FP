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

    <h1>Vehicle Management</h1>

    <div class="reg-form">
        <h2>Add Vehicle</h2>
        <form action="add_vehicle.php" method="post">
            <label for="model">Model:</label>
            <input type="text" id="model" name="model" required><br><br>

            <label for="year">Year:</label>
            <input type="number" id="year" name="year" min="1900" max="2099" required><br><br>

            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required><br><br>

            <label for="daily_rate">Daily Rate:</label>
            <input type="number" id="daily_rate" name="daily_rate" step="0.01" min="0" required><br><br>

            <label for="weekly_rate">Weekly Rate:</label>
            <input type="number" id="weekly_rate" name="weekly_rate" step="0.01" min="0" required><br><br>

            <button type="submit" class="btn-submit">Add Vehicle</button>
        </form>
    </div>

    <h1 class="db-functions-header">Database Functions</h1>

    <div class="db-functions">
        <h2>View Vehicle Information</h2>
        <form action="view_vehicle.php" method="post">
            <label for="vehicle_id">Search for a vehicle (Vehicle ID):</label>
            <input type="number" id="vehicle_id" name="vehicle_id">
            <button type="submit" class="btn-db">Search</button>
        </form>
    </div>

    <div class="db-functions">
        <h2>Update Vehicle Information</h2>
        <form action="update_vehicle.php" method="post">
            <label for="vehicle_id">Enter Vehicle ID:</label>
            <input type="number" id="vehicle_id" name="vehicle_id">
            <button type="submit" class="btn-db">Update Info</button>
        </form>
    </div>

    <!-- Delete Vehicle Form -->
    <div class="db-functions">
        <h2>Delete Vehicle</h2>
        <form action="delete_vehicle.php" method="post">
            <label for="vehicle_id">Enter Vehicle ID:</label>
            <input type="number" id="vehicle_id" name="vehicle_id">
            <button type="submit" class="btn-db">Delete Vehicle</button>
        </form>
    </div>

<footer>
    <p>Copyright &copy; 2024, Ta Shift! All Rights Reserved.</p>
</footer>
</body>
</html>