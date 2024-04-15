<?php
session_start();

// Redirect to member page if already logged in
if(isset($_SESSION['email'])) {
    header("Location: member.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <div class="content">
        <h2>Registration Page</h2>
        <!-- Add registration form here -->
        <form action="register.php" method="post">
            <input type="text" name="first_name" placeholder="First Name" required><br>
            <input type="text" name="last_name" placeholder="Last Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Register</button>
        </form>
    </div>

    <?php include 'templates/footer.php'; ?>
</body>
</html>
