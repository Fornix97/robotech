<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $appointmentDate = htmlspecialchars($_POST['appointmentDate']);
    $appointmentTime = htmlspecialchars($_POST['appointmentTime']);
    $notes = htmlspecialchars($_POST['notes']);

    $to = 'EvfreeLanceRepair@Gmail.com'; // Replace with your email address
    $subject = 'New Appointment Booking';
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\nDate: $appointmentDate\nTime: $appointmentTime\nNotes: $notes";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Appointment booked successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>
