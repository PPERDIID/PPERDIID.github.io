<?php
session_start();
session_destroy();
header("location:index.php?pesan=info_logout");
?>