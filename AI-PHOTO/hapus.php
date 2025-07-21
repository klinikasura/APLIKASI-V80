<?php
$id = $_GET["id"];
unlink("files/".$id);
header("location:index.php");
?>
