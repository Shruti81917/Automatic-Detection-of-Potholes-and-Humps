<?php
// Include the file where the database connection is established
include("includes/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $address = $_POST['address'];

    // Move the uploaded file to the correct path
    $photo_path = "C:\\xampp\\htdocs\\potholeDetector\\uploads\\" . basename($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'], $photo_path);

    // Insert data into the potholes table
    $sql = "INSERT INTO potholes (address, photo) VALUES ('$address', '$photo_path')";
    
    // Check if the query is successful
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
