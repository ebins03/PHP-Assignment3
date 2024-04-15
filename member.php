<?php
session_start();

// Redirect to login page if not logged in
if(!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>

    <div class="content">
        <h2>Welcome, <?php echo $_SESSION['email']; ?>!</h2>
        <!-- Add more content here -->

        <p>This is the member page.</p>
        
        <p><a href="logout.php">Logout</a></p>
    </div>

    <?php include 'templates/footer.php'; ?>
</body>
</html>
