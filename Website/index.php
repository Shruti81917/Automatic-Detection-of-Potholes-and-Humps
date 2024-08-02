<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: register.php");
    exit();
}

include("includes/db.php");
include("submit.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pothole Detector</title>
</head>
<body>
    <h1>Pothole Detector</h1>
  
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <label for="address">Address:</label>
        <input type="text" name="address" id="address" required><br>
        <label for="photo">Photo:</label>
        <input type="file" name="photo" id="photo" accept="image/*" required><br>
        <input type="submit" value="Submit">
    </form>

    <div id="potholeEntries">
        <!-- Display pothole entries here using JavaScript -->
    </div>

    <script src="script.js"></script>
    <a href="logout.php">Logout</a>
</body>
</html>
