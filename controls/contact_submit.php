<?php
if (isset($_POST) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<script>document.querySelector('#action').style.display='none';</script>";
    echo "<script src='./js/contacts.js'></script>";
    include('views/send_email.php');
}
