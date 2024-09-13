<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO</title>
    <link rel="stylesheet" href="./styles/portfolio.css">
    <style>
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body>

    <div class="navbar">

        <button onclick="scrollToSection('home')">HOME</button>
        <button onclick="scrollToSection('works')">WORKS</button>
        <button onclick="scrollToSection('contact')">CONTACTS</button>

    </div>

    <div id="home" class="section">
        <?php

        include('views/home.html');
        echo "<script>document.querySelector('#action').style.display='block';</script>";

        ?>
    </div>

    <div id="works" class="section">
        <h1>Works</h1>
        <p>Learn more About us here.</p>
    </div>

    <div id="contact" class="section">
        <?php include('views/Contacts.php') ?>
    </div>

    <script src="./js/animations.js"></script>


</body>

</html>