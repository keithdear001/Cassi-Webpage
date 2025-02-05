<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect posted data (you can later add sanitization and processing)
    $name = $_POST['name'] ?? '';
    // You can collect other fields similarly...

    // For testing, simply display a confirmation message.
    echo "Thank you, " . htmlspecialchars($name) . ". Your request has been received.";
} else {
    echo "Invalid form submission.";
}
?>
