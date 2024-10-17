<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $bookTitle = $_POST['bookTitle'];
    $bookAuthor = $_POST['bookAuthor'];
    $bookPrice = $_POST['bookPrice'];
    $bookDescription = $_POST['bookDescription'];
    $isbn = $_POST['isbn'];

    // WhatsApp/SMS API से जोड़ना (फ़िलहाल प्लेसहोल्डर है)
    $message = "Seller Details:\nName: $name\nEmail: $email\nPhone: $phone\nAddress: $address\n" .
               "Book: $bookTitle by $bookAuthor\nPrice: ₹$bookPrice\nISBN: $isbn\nDescription: $bookDescription";

    // अपने व्हाट्सएप API इंटीग्रेशन के लिए
    $yourPhone = '919005334613';
    $apiURL = "https://api.whatsapp.com/send?phone=$yourPhone&text=" . urlencode($message);

    // Redirect to WhatsApp link
    header("Location: $apiURL");
    exit();
}
?>
