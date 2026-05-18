<?php
$localhost='localhost';
$username='root';
$pass='';
$db_name='php_test';

$conn= new mysqli($localhost,$username,$pass,$db_name);
if ($conn) {
    echo"connected"; 
} else {
    echo"not connected";
}
?>
