<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $company = htmlspecialchars($_POST["company"]);
    $website = htmlspecialchars($_POST["website"]);
    $role = htmlspecialchars($_POST["role"]);
    $use_case = htmlspecialchars($_POST["use_case"]);
    $contact = htmlspecialchars($_POST["contact"]);
    $notes = htmlspecialchars($_POST["notes"]);

    $to = "keith.dear001@cassi-ai.com";
    $subject = "New Contact Request from Cassi AI Website";
    $message = "
    Name: $name\n
    Company: $company\n
    Website: $website\n
    Role: $role\n
    Proposed Use Case: $use_case\n
    Contact Details: $contact\n
    Notes: $notes\n
    ";
    $headers = "From: no-reply@cassi-ai.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "<h2>Thank you! Your request has been submitted.</h2><p>We'll get back to you soon.</p>";
    } else {
        echo "<h2>Oops! Something went wrong.</h2><p>Please try again later.</p>";
    }
} else {
    echo "<h2>Invalid Request</h2>";
}
?>
