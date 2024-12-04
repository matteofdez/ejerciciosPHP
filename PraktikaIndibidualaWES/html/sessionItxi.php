<?php
session_unset();
session_destroy();
setcookie(session_name(), '', time() - 3600, '/', '', true, true);
header("Location: login.php");
