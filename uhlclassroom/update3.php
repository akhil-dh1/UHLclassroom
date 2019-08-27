<?php session_start();
include('connect.php');?>
<?php if (!($_SESSION['user_id'] && $_SESSION['usertype']== 'Admin')){

header("location:login.php?");
 }?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UHL Classroom</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2067 Education
http://www.tooplate.com/view/2067-education
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="js/jquery-1.6.3.js"></script> 

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type="text/javascript" src="js/io.socket.js"></script><script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

</head>
<body>
<a href="http://iitmandi.ac.in/"><img src="images/iitmandilogo.jpg" style="float:left; margin-top: 60px; height: 59px; width: 110px;"></a>
<div id="tooplate_header">
<form style="float:right; margin-top: 25px;" method="post" action="searchs.php?go"  id="searchform"/>
      <input style="padding: 3px;"  type="text" name="name"/>
      <input style="padding: 3px;"  type="submit" name="submit" value="Search"/>
    </form>
    <a href="index.php" class="sitetitle">UHL Classroom</a>  
    <div id="tooplate_menu" class="ddsmoothmenu">
         <ul>
            <li><a href="index.php" class="select">Home</a></li>
            <li><a href="about.html">About Us</a></li>
           
            <li><a href="ourmentor.php">Our Mentors</a></li>
            <li><a href="vj.php">Vigyan Jyoti</a>
                <ul>
                    <li><a href="ourvjstudent.php">Vigyan Jyoti Students</a></li>
                    <li><a href="ourstudent.php">Students</a></li>
                </ul>
            </li>
            <li><a href="#">Resources</a>
                 <ul><li><a href="#">JEE Syllabus</a>
                <ul>
                    <li><a href="mathsyll.php">Mathematics</a></li>
                    <li><a href="chemsyll.php">Chemistry</a></li>
                    <li><a href="physyll.php">Physics</a></li>
                </ul>
                <li><a href="Books.php">Books</a>
            <li><a href="#">Videos</a>
                <ul>
                    <li><a href="allvideos.php">All Videos</a></li>
                    <li><a href="maths11.php">Maths Class11</a></li>
                    <li><a href="maths12.php">Maths Class12</a></li>
                    <li><a href="phy11.php">Physics Class11</a></li>
                    <li><a href="phy12.php">Physics Class12</a></li>
                    <li><a href="chem11.php">Chemistry Class11</a></li> 
                    <li><a href="chem12.php">Chemistry Class12</a></li> 
                    <li><a href="motivation.php">Words of Wisdom</a></li>
                    
            </li>
                    <li><a href="https://www.khanacademy.org">Khan Academy Videos</a></li>                                                                     
                </ul>
            </ul>
            </li>                
            <li><a href="contact.php" class="last">Contact Us</a></li>
        </ul>
        <br style="clear: left" />
    </div> <!-- end of tooplate_menu -->      
</div> <!-- END of header -->
<table height="100%"></table>

    <table width="100%">
    <tr></br></br>
    <td width="15%" style="border-right:dotted #006600 thin;" valign="top">    
        <table width="100%"><br><br>
<div style="width: 150px; margin:0 auto;">
<p><img src="images/slider/pp.png" width="150"></p>

<?php if (isset ($_SESSION["user_id"])) {?>

<p style="text-align:center;font-size:18px; color:green;"> Hi <?php echo $_SESSION["username"];
?>( <?php echo $_SESSION["user_id"];?>) </p>
<?php
}
else

{
?>

<p style="text-align:center;font-size:18px; color:red;"> Hi  (<a href="login.php">Please login </a>)</p>
<?php }

?>

<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "addlec.php"> Add video</a></p>
<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "list_pm.php"> Inbox</a></p>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="update.php">Update Mentor </a> </p>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="update1.php">Update Student </a> </p>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="videos1.php">My videos </a> </p>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="logout.php">Logout </a> </p>
</br></br></div>

</div>


</table>
    
    
</td>
    
    
<!--first end-->
    
<!--- 2nd -->
    
<td width="80%" valign="top">
<div class="container">
<h2>Update Student</h2>

<p>Click On Menu</p>
<?php
include('connect.php');

if (isset($_GET['submit'])) {
$id = $_GET['id'];
$name = $_GET['username'];
$email = $_GET['email'];
$usertype = $_GET['usertype'];
$verify = $_GET['verify_user'];
$sql = mysqli_query($connection, "update login set
username='$name', email='$email', usertype='$usertype',
verify_user='$verify' where id='$id'");
}

$sql = "SELECT * FROM `login` where usertype='Vigyan Jyoti Student'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

while ($row = $result->fetch_assoc()) {
	echo "<table>";
echo "<tr>";
echo "<td width='100px' height='100px'>";
echo "<b><a href='update3.php?update={$row['id']}'>{$row['username']}</a></b>";echo "<br>";
echo "<b><a href='update3.php?update={$row['id']}'>{$row['usertype']}</a></b>";
?>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="stuhome.php?id=<?php echo $row['id'];?>"> homepage </a> </p>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="deluser.php?id=<?php echo $row['id'];?>"> Delete Student </a> </p>
<?php
echo "<br /><br />";
echo "</td>";
echo "</tr>";
echo "</table>";}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$sql1 = "SELECT * FROM `login` where id=$update";
$result1 = mysqli_query($connection, $sql1);
while ($row1= $result1->fetch_assoc()) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='id' value='{$row1['id']}' />";
echo "<br />";
echo "<label>" . "Name:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='username' value='{$row1['username']}' />";
echo "<br />";
echo "<label>" . "Email:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='email' value='{$row1['email']}' />";
echo "<br />";
echo "<label>" . "Usertype:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='usertype' value='{$row1['usertype']}' />";
echo "<br />";
echo "<label>" . "verification:" . "</label>" . "<br />";
echo "<input class='input' type='int' name='verify_user' value='{$row1['verify_user']}' />";
echo "<br />";
echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>

</div>
<div class="clear"></div>
</div>
</div><?php
$connection->close();
?>
</body>
</html>