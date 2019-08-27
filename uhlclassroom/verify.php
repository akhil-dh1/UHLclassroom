<?php
require_once('connect.php');
$key = $_GET['key'];
$sql = "SELECT * FROM `login` WHERE verification_key='$key'";
$res = mysqli_query($connection, $sql);
$count = mysqli_num_rows($res);
$r = mysqli_fetch_assoc($res);
$id = $r['id'];
if($count == 1){
	$usql = "UPDATE `login` SET active=1 WHERE id=$id";
	$ures = mysqli_query($connection, $usql);
	if($ures){
		echo "Account Activated";
	}else{
		echo "failed to activate account";
	}
}else{
	echo "Key not found in database";
}
 
?>