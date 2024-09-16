<link rel="stylesheet" href="styles/send_email.css">

<div class="email-container">
    <div class="send-email">
        <form method="POST" action="">
            <input type="text" id="visitorName" name="visitorName" placeholder="Name"><br>
            <input type="email" id="email-add" name="email-add" placeholder="E-mail"><br />
            <textarea type="text" id="message" name="message" placeholder="Send me message!"></textarea><br />
            <button type="submit" id="sent" name="sent">HIT ME!</button>
        </form>
    </div>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and process form data
    $visitorName = isset($_POST['visitorName']) ? htmlspecialchars($_POST['visitorName']) : '';
    $emailAdd = isset($_POST['email-add']) ? htmlspecialchars($_POST['email-add']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';
}
