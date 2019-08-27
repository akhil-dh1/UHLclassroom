<?php session_start();

// connect to the database
include('connect.php');

// confirm that the 'id' variable has been set

if (isset($_SESSION['user_id']))
{
// get the 'id' variable from the URL
$user_id=$_SESSION['user_id'];

// delete record from database
$sql = "DELETE FROM `mentorform` WHERE user_id='".$user_id."'";
$result = $connection->query($sql);


$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

$connection->close();
// redirect user after delete is successful

header('Location: mentorform.php');
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: myhome.php");
}
//}
?>