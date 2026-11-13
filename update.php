<?php
include "db.php";
$id = $_POST["id"];
mysqli_query($conn,"UPDATE tasks set status=1 WHERE id=$id");
?>