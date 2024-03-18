<?php
session_start();
unset($_SESSION['id']);

echo '<script>document.location.href="index.php"</script>';
exit();