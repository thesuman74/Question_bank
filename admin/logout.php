<?php
header('location:login.php');

session_start();

session_destroy();

echo "Logout succesfully";
