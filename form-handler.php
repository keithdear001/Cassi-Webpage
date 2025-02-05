<?php
// Test that the file is accessible and handles POST correctly.
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "POST request received. Name: " . htmlspecialchars($_POST['name'] ?? 'N/A');
} else {
    echo "This page only accepts POST requests.";
}
?>
