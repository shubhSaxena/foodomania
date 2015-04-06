<?php
session_start();
unset($_SESSION[userid]);
header("location:user_edit_reg.php");
?>