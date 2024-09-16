<?php
if (isset($_POST) && $_SERVER['REQUEST_METHOD'] === 'POST') {

    echo "<script src='./js/contacts.js'></script>";
    echo "<script src='./js/submit.js'></script>";

    include('views/send_email.php');
}
//include('views/send_email.php');
