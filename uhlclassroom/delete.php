<?php session_start();

// connect to the database
include('connect.php');

// confirm that the 'id' variable has been set

if (isset($_GET['vid_id']))
{
// get the 'id' variable from the URL
$vid_id=$_GET['vid_id'];

// delete record from database
$sql = "DELETE FROM `vid_lecture` WHERE vid_id='".$vid_id."'";
$result = $connection->query($sql);


$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

$connection->close();
// redirect user after delete is successful
header("Location: allvideos.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: video_single.php?vid_id=1");
}
//}
?>