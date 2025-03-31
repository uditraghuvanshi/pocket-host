<?php
// Database configuration
$servername = "sql12.freesqldatabase.com"; // Database server (for XAMPP localhost)
$username = "sql12770433"; // Default MySQL username for XAMPP
$password = "IjzKQH3Es2"; // Default MySQL password for XAMPP (blank)
$dbname = "sql12770433"; // Your database name (ensure it matches what you created in phpMyAdmin)

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
