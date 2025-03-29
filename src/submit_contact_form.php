<?php
// Database configuration
$servername = "localhost"; // Database server (for XAMPP localhost)
$username = "root"; // Default MySQL username for XAMPP
$password = ""; // Default MySQL password for XAMPP (blank)
$dbname = "contact_db"; // Your database name (ensure it matches what you created in phpMyAdmin)

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $country_code = $_POST['country_code'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $business_name = $_POST['business_name'];
    $service = $_POST['service'];
    $description = $_POST['description'];

    // Insert into database (using prepared statements to prevent SQL injection)
    $stmt = $conn->prepare("INSERT INTO contact_requests (name, country_code, phone, email, business_name, service, description)
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $name, $country_code, $phone, $email, $business_name, $service, $description);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
