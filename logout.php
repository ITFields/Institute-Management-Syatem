<?php
session_start();
session_unset();
session_destroy();
header("Location: index.html"); // 🔥 Redirect to index.html after logout
exit();
?>
