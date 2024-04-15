<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <div class="content">
        <h2>Contact Us</h2>
        <!-- Add contact form here -->
        <form action="contact.php" method="post">
            <input type="text" name="full_name" placeholder="Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <textarea name="message" placeholder="Your Message..." rows="4" required></textarea><br>
            <button type="submit">Send Message</button>
        </form>
    </div>

    <?php include 'templates/footer.php'; ?>
</body>
</html>
