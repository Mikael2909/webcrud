<?php

session_start();
$_SESSION = [];
session_unset("user");
header("Location: masuk.php");

?>