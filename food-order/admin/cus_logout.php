<?php
include('../config/constraints.php');
session_destroy();
header('location:'.SITEURL.'admin/cus_login.php');
?>