<?php
session_start();

// Check if user is logged in
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
    <title>Home Page</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <?php include 'templates/header.php'; ?>
    <img src="images\img1.avif" id="img1" height="300" weight="300">
    <p id="welcome">
        Welcome to Wonderla Water Theme Park, where your adventure begins! Dive into a world of excitement and thrills, <br>
        where every splash promises unforgettable memories. Whether you're seeking heart-pounding water slides, relaxing lazy rivers, <br>
        or family-friendly attractions, Wonderla has something for everyone. Get ready to soak up the fun and make a splash at the<br>
        ultimate destination for aquatic entertainment!
    </p>

    <div class="content">
        <h2>User Login</h2>
        <!-- Add more content here -->

        <form action="index.php" method="post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        
        <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </div>

    <?php include 'templates/footer.php'; ?>
</body>
</html>
