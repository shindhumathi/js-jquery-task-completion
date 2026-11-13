<?php
include "db.php";
$task = $_POST["task"];
mysqli_query($conn,"INSERT INTO tasks(task,status) VALUES('$task','0')");
?>