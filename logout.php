<?php
setcookie("Name", "", time() - 3600, "/bai3");
setcookie("Role", "", time() - 3600, "/bai3");
setcookie("Id", "", time() - 3600, "/bai3");

header("Location: login.php");
?>