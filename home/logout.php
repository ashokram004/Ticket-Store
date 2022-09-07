<?php
session_start();
unset($_SESSION['mobile']);
header("location:http://localhost/ticketstore/index.html");
?>