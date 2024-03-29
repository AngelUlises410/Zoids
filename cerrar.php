<?php
session_start();
session_destroy();

header("location:index.php?mensaje=3");
?>