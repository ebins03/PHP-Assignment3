<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Final Assignment</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div id="container">
        <header id="banner">
            <h1>WONDERLA</h1>
            <h2>Amusement Parks & Resorts</h2>
        </header>
        <div id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php if(isset($_SESSION['email'])): ?>
                    <li><a href="member.php">Member</a></li>
                    <li><a href="logout.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="register.php">Register</a></li>
                <?php endif; ?>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="main-content">
