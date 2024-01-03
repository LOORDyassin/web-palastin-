<?php
include 'db_connection.php';

$sql = "CREATE TABLE donations (
    id INT PRIMARY KEY AUTO_INCREMENT,
    amount DECIMAL(10, 2) NOT NULL,
    months INT NOT NULL,
    card_number VARCHAR(16) NOT NULL,
    cardholder_name VARCHAR(255) NOT NULL,
    expiry_month INT NOT NULL,
    expiry_year INT NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    donation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
