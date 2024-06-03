CREATE TABLE Customer (
    customer_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    email VARCHAR(100),
    phone_number VARCHAR(20),
    address VARCHAR(255),
    drivers_license VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE Vehicles (
    vehicle_id INT PRIMARY KEY AUTO_INCREMENT,
    type VARCHAR(50),   -- e.g., sedan, SUV, truck
    make VARCHAR(50),   -- e.g., Toyota, Ford, Honda
    model VARCHAR(50),  -- e.g., Camry, Mustang, Accord
    year INT,
    color VARCHAR(30),
    license_plate VARCHAR(20) UNIQUE,
    daily_rate DECIMAL(10, 2),
    weekly_rate DECIMAL(10, 2),
    mileage INT
    PicturePath VARCHAR(255)
);

CREATE TABLE Rental (
    rental_id INT PRIMARY KEY AUTO_INCREMENT,
    customer_id INT,
    vehicle_id INT,
    booking_date DATETIME,
    start_date DATETIME,
    end_date DATETIME,
    status VARCHAR(20),  -- e.g., reserved, active
    type  VARCHAR(10),  -- e.g., weekly, daily
    total_price DECIMAL(10, 2),
    FOREIGN KEY (customer_id) REFERENCES Customer(customer_id),
    FOREIGN KEY (vehicle_id) REFERENCES Vehicles(vehicle_id)
);

CREATE TABLE RentalHistory (
    history_id INT PRIMARY KEY AUTO_INCREMENT,
    rental_id INT,
    status_change_date DATETIME,
    status VARCHAR(20),
    notes TEXT,
    total_price DECIMAL(10, 2),
    FOREIGN KEY (rental_id) REFERENCES Rental(rental_id)
);

INSERT INTO Vehicle (vehicle_id, type, make, model, year, color, license_plate, daily_rate, weekly_rate, mileage, PicturePath) 
VALUES 
('Compact SUV', 'Chevrolet', 'Equinox', 2022, 'Silver Blue', 'FAF 143', 65.00, 60.00, '31', 'images/chevrolet_equinox.png'), 
('Compact SUV', 'Honda', 'CR-V', 2023, 'Red', 'GHF 452', 70.00, 65.00, '30', 'images/chevrolet_equinox.png'), 
('Compact SUV', 'Jeep', 'Cherokee', 2022, 'Beige', 'BGF 543', 85.00, 80.00, '25', 'images/jeep_cherokee.png'), 
('Mid-Size Sedan', 'Nissan', 'Altima', 2023, 'Blue', 'KNS 9T0', 90.00, 85.00, '31', 'images/nissan_altima.png'), 
('Compact', 'Toyota', 'Corolla', 2022, 'White', 'KZA 05E', 150.00, 130.00, '36', 'images/toyota_corolla.png'), 
('Compact', 'Toyota', 'Corolla (Orange)', 2023, 'Orange', 'ALX 347', 160.00, 150.00, '36', 'images/toyota_corolla_orange.png');
