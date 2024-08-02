<?php
include("includes/db.php");

$result = $conn->query("SELECT * FROM potholes");

while ($row = $result->fetch_assoc()) {
    echo '<div class="pothole-entry">';
    echo "<p>ID: " . $row['id'] . "</p>";
    echo "<p>Address: " . $row['address'] . "</p>";
    echo '<img src="' . $row['photo'] . '" alt="Pothole Photo">';
    echo '</div>';
}

$conn->close();
?>
