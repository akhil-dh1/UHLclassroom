<?php  //Start the Session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UHL login</title>
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
    <title>User Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
//if (isset ($_SESSION['user_id'])){
  //header("location:index.php?msg= User already logged in. ");}
 
 require_once('connect.php');

//3. If the form is submitted or not.
//3.1 If the form is submitted
if (isset($_POST['username']) and isset($_POST['password'])){
//3.1.1 Assigning posted values to variables.
$username = $_POST['username'];
$password = $_POST['password'];
//3.1.2 Checking the values are existing in the database or not
$sql = "SELECT * FROM `login` WHERE username='$username' and password='$password'";
 
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
$row = $result->fetch_assoc();
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.
if ($count == 1){
$_SESSION['username'] = $username;
$_SESSION['usertype']=$row['usertype'];
$_SESSION['user_id']=$row['id'];
$id=$_SESSION['user_id'];
$_SESSION['verify_user']=$row['verify_user'];
$updateCount = "UPDATE `login` SET `loggedInCount`=`loggedInCount`+1 WHERE id=$id";
$result = mysqli_query($connection, $updateCount) or die(mysqli_error($connection));

}else{
//3.1.3 If the login credentials doesn't match, he will be shown with an error message.
$fmsg = "Invalid Login Credentials.";
}
}
//3.1.4 if the user is logged in Greets the user with message

    
if (isset($_SESSION['username'])){
    $smsg="User already logged in";
$username = $_SESSION['username'];



//if ($_SESSION['verify_user']== '1'){

if(isset ($count)==1)
{
$_SESSION['login_user']=$username;
?>

<!-- <script type="text/javascript">
    var socket=io.connect("http://localhost:9090/",{query:"user_id="+<?php echo $_SESSION['user_id']; ?>});
</script>
 -->
<?php
if ($_SESSION['usertype']=='Mentor' && $_SESSION['verify_user']== '1')
{
  header('location:welcome_mentor.php');
}
elseif($_SESSION['usertype']=='Student' && $_SESSION['verify_user']== '1')
{
 header('location:welcome_student.php');
}
elseif($_SESSION['usertype']=='Vigyan Jyoti Student' && $_SESSION['verify_user']== '1')
{
 header('location:welcome_student.php');
}
elseif($_SESSION['usertype']=='Admin')
{
 header('location:welcome_admin.php');
}
else
{

  header('location:login.php?msg= User verification under process.');

}

//header("location:  welcome.php");
}

 


}
//elseif ($_SESSION['verify_user']== '0')
//{
  //  echo "u r not verified";
//}

//}
       
?>
</head>
<body>
<a href="http://iitmandi.ac.in/"><img src="images/iitmandilogo.jpg" style="float:left; margin-top: 60px; height: 59px; width: 110px;"></a>
<div id="tooplate_header">
    <?php
        if(!isset($_SESSION['user_id'])){
    ?>
    <div id="registerDiv">
        <a href="register.php" id="registerButton">Register</a>
    </div>
    <div id="loginDiv">
        <a href="login.php" id="loginButton" >Login</a>
    </div>
  <form style="float:right; margin-top: -30px;" method="post" action="searchs.php?go"  id="searchform"/>
      <input style="padding: 5px;"  type="text" name="name"/>
      <input style="padding: 5px;"  type="submit" name="submit" value="Search"/>
  </form>
    <?php
        }
        else{
    ?>
    <form style="float:right; margin-top: 10px;" method="post" action="searchs.php?go"  id="searchform"/>
      <input style="padding: 5px;"  type="text" name="name"/>
      <input style="padding: 5px;"  type="submit" name="submit" value="Search"/>
  </form>
  <?php
    }
  ?>
    <!-- <a href="index.php" class="sitetitle">UHL Classroom</a>   -->
    <div id="tooplate_menu" class="ddsmoothmenu">
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <li><a href="index.php" class="select">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        
        </li>
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
                    <li><a href="https://www.khanacademy.org">Khan Academy Videos</a></li>
                    <li><a href="https://www.nta.ac.in/LecturesContent">IIT-PAL Videos</a></li>                                                                                                                                                      
                </ul>
            </li>
            <li><a href="ourmentor.php">Our Mentors</a></li>               
            <li class="last"><a href="contact.php" class="last">Contact Us</a></li>
         <li>
               
</div>
<span style="font-size:30px;float:left; margin-top: 20px;cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
        <ul>
            <li><a href="index.php" class="select">Home</a></li>
            <li><a href="about.html">About Us</a></li>
           
            <li><a href="ourmentor.php">Our Mentors</a></li>
            <li><a href="#">Vigyan Jyoti</a>
                <ul>
                    <li><a href="vj.php">Vigyan Jyoti Home</a></li>                                                                           
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
                    <li><a href="https://www.nta.ac.in/LecturesContent">IIT-PAL Videos</a></li>                                                                                                                                                
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
    <?php if (isset($_SESSION['user_id'])){?>


    <tr></br></br>
    <td width="15%" style="border-right:dotted #006600 thin;" valign="top">
    
        <table width="100%"><br><br>
        <div style="width: 150px; margin:0 auto; ">

<?php
 if ($_SESSION["usertype"]=='Mentor' && $_SESSION['verify_user']=='1') {


 require_once('connect.php');
$id = $_SESSION["user_id"];


$sql = "SELECT image FROM `mentor_image` WHERE user_id='".$id."' ";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()){        
        echo '<dd>'?>
     <img src="<?php echo $row['image'];?>" width="150" height="200" >
     <?php
     '</dd>';
    
}?>

 
<?php
} else {?>
    <p><img src="images/slider/pp.png" width="150"></p>

<?php
} 
} 

?></div>
<div style="width: 150px; margin:0 auto; ">
<?php
 if ($_SESSION["usertype"]=='Student' or $_SESSION['usertype']=='Vigyan Jyoti Student'&& $_SESSION['verify_user']=='1') {

 require_once('connect.php');
$id = $_SESSION["user_id"];


$sql = "SELECT image FROM `stu_image` WHERE user_id='".$id."' ";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()){        
        echo '<dd>'?>
     <img src="<?php echo $row['image'];?>" width="150" height="200" >
     <?php
     '</dd>';
    
}?>


 
<?php
} else {?>
    <p><img src="images/slider/pp.png" width="150"></p>
 <?php   
}
} 

?></div>
<div style="width: 150px; margin:0 auto; ">
<br>
        
        <?php if (isset ($_SESSION["user_id"])) {?>

<p style="text-align:center;font-size:18px; color:green;"> Hi <?php echo $_SESSION["username"];
?>( <?php echo $_SESSION["user_id"];?>) </p>
<?php
}
else

{
?>

<p style="text-align:center;font-size:18px; color:red;"> Hi  (<a href="login.php"><b>Please login </b></a>)</p>
<?php }

?>
<?php if($_SESSION['user_id'] && $_SESSION['verify_user']==1){?>

 <?php if ($_SESSION['usertype']=='Mentor' or $_SESSION['usertype']=='Admin')
 {?>
<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "addlec.php"> Add video</a></p>
<?php }

?>
<?php if ($_SESSION['usertype']=='Mentor'){?>
<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "mentorform.php"> Mentor Form</a></p>
<?php }

?>
<?php if ($_SESSION['usertype']=='Mentor'){?>
<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "myhome.php"> Home page</a></p>
<?php }

?>
<?php if ($_SESSION['usertype']=='Mentor' or $_SESSION['usertype']=='Admin')
 {?>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="videos1.php">My videos </a> </p>
<?php }

?>
<?php if ($_SESSION['usertype']=='Admin')
{?>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="update.php">Update Mentor </a> </p>
<?php }

?>
<?php if ($_SESSION['usertype']=='Admin')
{?>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="update1.php">Update Student </a> </p>
<?php
}}
?>
<?php if($_SESSION['usertype']=='Student' or $_SESSION['usertype']=='Vigyan Jyoti Student'&& $_SESSION['verify_user']=='1'){?>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="stuform.php">Student From</a> </p>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="myhome1.php">Home Page</a> </p>
<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "list_pm.php"> Inbox</a></p>
<?php
}?>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="logout.php">Logout </a> </p>
<?php
}?>
</br></br>
</div>

</table>
    
    
</td>
    
    
<!--first end-->
    
<!--- 2nd -->
    
<td width="80%" valign="top" align="center">


<div class="container">
<div style="width: 400px; margin:0 auto;">
<?php
if (isset($_GET["msg"])){
    echo $_GET["msg"];
}
?>
      <form action="login.php" method="post"><!--class="form-signin" method="POST"-->
        <h2 class="form-signin-heading" align="center">Please Login</h2>
        <div class="input-group">
        <!--<span class="input-group-addon" id="basic-addon1">@</span>-->
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        <a class="btn btn-lg btn-primary btn-block" href="register.php" style="color:white;"> Register</a>
      </form>
      </div>
</div>
<div class="clear h30"></div>
        <div style="display:none;" class="nav_up" id="nav_up"></div>
    </div>    <!-- END of tooplate_main -->

<div id="tooplate_footer_wrapper">
    <div id="tooplate_footer">
        <div class="col_4">
            <h4>Pages</h4>
            <ul class="nobullet bottom_list">
                <li><a href="index.php">Home</a></li>
                <li><a href="allvideos.php">All Videos</a></li>
                <li><a href="ourmentor.php">Our Mentor</a></li>
               <li><a href="about.html">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        
        <div class="col_4">
            <h4>Our Partners</h4>
            <ul class="nobullet bottom_list">
                <li><a href="#">CITHR</a></li>
                <!--<li><a href="#">Digital Blog</a></li>
                <li><a href="#">Image Gallery</a></li>
                <li><a href="#">HTML Web Templates</a></li>
                <li><a href="#">Preminum Themes</a></li>-->
            </ul>
        </div>
        
         <div class="col_4">
            <h4>About</h4>
            <p> This project is in continuation with Ministry of Human Resource Development (MHRD) and HP Board of School Education's ambitious ICT <a href="about.html" class="more">More</a></p>
            
        </div>
        <div class="col_4 no_margin_right">
            <h4>Youtube</h4>
            <p>"You can also subscribe us on YouTube <a href="#">#UHL Classroom</a> for video updates"</p>
            <a href="https://www.youtube.com/channel/UC33HxUNdfR6RsYTet3Qhvqw">Subscribe us on YouTube</a>
        </div>
        <div class="clear"></div>
    </div> <!-- END of tooplate_footer -->
</div> <!-- END of tooplate_footer_wrapper -->

<div id="tooplate_copyright_wrapper">
    <div id="tooplate_copyright">
        Copyright © 2017 UHL Classroom 
        
    </div>
</div>

<script src="js/scroll-startstop.events.jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        var $elem = $('#content');
        
        $('#nav_up').fadeIn('slow');
        
        $(window).bind('scrollstart', function(){
            $('#nav_up,#nav_down').stop().animate({'opacity':'0.2'});
        });
        $(window).bind('scrollstop', function(){
            $('#nav_up,#nav_down').stop().animate({'opacity':'1'});
        });
        
        $('#nav_up').click(
            function (e) {
                $('html, body').animate({scrollTop: '0px'}, 800);
            }
        );
    });
</script>


</body>
</html>