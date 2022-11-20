<?php
include_once('connect.php');

$res=mysqli_query($con,"select * from 'votingsystem' ");

print_r($res);

mysqli_close($con);

?>
