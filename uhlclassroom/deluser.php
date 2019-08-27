<?php session_start();

// connect to the database
include('connect.php');

// confirm that the 'id' variable has been set

if (isset($_GET['id']))
{
// get the 'id' variable from the URL
$id=$_GET['id'];

// delete record from database
$sql= "DELETE login, mentorform, mentor_image FROM login INNER JOIN mentorform INNER JOIN mentor_image WHERE login.id = mentorform.user_id AND mentorform.user_id = mentor_image.user_id AND login.id=$id";
$result = $connection->query($sql);


$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

$connection->close();
// redirect user after delete is successful
header("Location: welcome_admin.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: update.php");
}
//}
?>