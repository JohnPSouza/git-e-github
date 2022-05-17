<?php

session_start();

unset($_SESSION['usuario']);
unset($_SESSION['email']);

echo '<script>location.href = \'index.php\';</script>';
    exit;
?>