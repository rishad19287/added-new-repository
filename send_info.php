<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // फॉर्म डेटा को कैप्चर करें
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $bookTitle = htmlspecialchars($_POST['bookTitle']);
    $bookAuthor = htmlspecialchars($_POST['bookAuthor']);
    $bookPrice = htmlspecialchars($_POST['bookPrice']);
    $bookDescription = htmlspecialchars($_POST['bookDescription']);
    $isbn = htmlspecialchars($_POST['isbn']);

    // मैसेज तैयार करें
    $message = "Seller Details:\n" .
               "Name: $name\nEmail: $email\nPhone: $phone\nAddress: $address\n" .
               "Book: $bookTitle by $bookAuthor\nPrice: ₹$bookPrice\nISBN: $isbn\nDescription: $bookDescription";

    // WhatsApp API लिंक बनाएं (नंबर का सही फॉर्मेट ध्यान रखें)
    $yourPhone = '919005334613';
    $apiURL = "https://api.whatsapp.com/send?phone=$yourPhone&text=" . urlencode($message);

    // रीडायरेक्ट करें व्हाट्सएप पर
    header("Location: $apiURL");
    exit();
} else {
    echo "Invalid Request";
}
?>
