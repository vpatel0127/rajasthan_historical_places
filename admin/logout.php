<?php
session_start();
session_unregister('username');
session_destroy();
header('location:index.php');

?>