<?php session_start();
    require_once('connect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width= device-width, initial-scale=1.0" />

<title>UHL Classroom</title>

<!--
Template 2067 Education
http://www.tooplate.com/view/2067-education
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="js/jquery-1.6.3.js"></script> 

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script type="text/javascript" src="js/io.socket.js"></script><script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})
</script>
<!-- <?php if(isset($_SESSION['user_id'])){?>
<script type="text/javascript">
    createSocket(<?php echo $_SESSION['user_id']; ?>);
</script>
<?php } ?> -->
    <title>Books </title>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

 Latest compiled and minified JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>  -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

</head>
<body>
<a href="http://iitmandi.ac.in/"><img src="images/iitmandilogo.jpg" style="float:left; margin-top: 60px; height: 59px; width: 90px;"></a>

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

    <tr></br></br>
    <td width="15%" style="border-right:dotted #006600 thin;" valign="top">
    <table width="100%">
    <div style="width: 150px; margin:0 auto; ">
<?php
 if (($_SESSION["usertype"]=='Mentor') && $_SESSION['verify_user']=='1') {


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
 if (($_SESSION["usertype"]=='Student' or $_SESSION['usertype']=='Vigyan Jyoti Student' or $_SESSION["usertype"]=='Vigyan Jyoti Student') && $_SESSION['verify_user']=='1') {

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

<!-- <p style="text-align:center;font-size:18px; color:red;"> Hi  (<a href="login.php"><b>Please login </b></a>)</p> -->
<?php }

?>
 <?php if ($_SESSION['usertype']=='Mentor' && $_SESSION['verify_user']=='1' or $_SESSION['usertype']=='Admin')
 {?>
<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "addlec.php"> Add video</a></p>
<?php }

?>
<?php if ($_SESSION['usertype']=='Mentor' && $_SESSION['verify_user']=='1'){?>
<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "mentorform.php"> Mentor Form</a></p>
<?php }

?>
<?php if ($_SESSION['usertype']=='Mentor' && $_SESSION['verify_user']=='1'){?>
<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "myhome.php"> Home page</a></p>
<?php
$sql = "SELECT * FROM `pm` WHERE (receiver=$id and seen != 'yes')";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
if ($result->num_rows > 0) {?>
<p><a style="color: #ffffff;" class="btn btn-lg btn-danger btn-block"  href= "list_pm.php"> Inbox</a></p>
<?php
}
else{?>

<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "list_pm.php"> Inbox</a></p>
<?php }?>
<?php }

?>
<?php if ($_SESSION['usertype']=='Mentor' && $_SESSION['verify_user']=='1' or $_SESSION['usertype']=='Admin')
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
}
?>
<?php if(($_SESSION['usertype']=='Student' or $_SESSION['usertype']=='Vigyan Jyoti Student') && $_SESSION['verify_user']=='1'){?>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="stuform.php">Student From</a> </p>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="myhome1.php">Home Page</a> </p>
<?php
$sql = "SELECT * FROM `pm` WHERE (receiver=$id and seen != 'yes')";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
if ($result->num_rows > 0) {?>
<p><a style="color: #ffffff;" class="btn btn-lg btn-danger btn-block"  href= "list_pm.php"> Inbox</a></p>
<?php
}
else{?>

<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "list_pm.php"> Inbox</a></p>
<?php }?>
<?php
}
if(isset($_SESSION['user_id'])){?>
<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="logout.php">Logout </a> </p>
<?php
}
?>
</br></br></div>

</div>

</table>
    
    
</td>
    <td width="80%" valign="top">


    <div id="tooplate_main">
          <?php if(isset($_SESSION['user_id']) && $_SESSION['verify_user']==1){
            if($_SESSION['usertype']=='Mentor' or $_SESSION['usertype']=='Admin'){
                echo '<div align="center"><a href="addbook.php" id="addBookButton">Add Book</a></div>';
            }
          }
          ?>
    	<h1 align="center"> Books for JEE </h1>
       <div id="home_about">
        <h2>Mathematics</h2>
<?php 
    $result=mysqli_query($connection,"select * from books where subject='Mathematics'");
    $i=1;
    while($mathbook=mysqli_fetch_array($result)){
        echo "<h3><a href='".$mathbook['link']."'>$i. ".htmlentities($mathbook['title'], ENT_QUOTES, 'UTF-8')." </a></h3>";
        $i=$i+1;
    }
?>
<!-- 
<h3> <a href="https://archive.org/details/planetrigonomet00lonegoog/page/n38">2.Co-ordinate geometry and trigonometry- S L Loney.</a></h3>

<h3><a href="https://dlscrib.com/queue/problems-in-calculus-of-one-variable-by-i-a-maron_587761b36454a7107f35c075_pdf?queue_id=59a56054dc0d60902c568edd"> 3.Calculus – by I.A Maron</a></h3>

<h3><a href="https://drive.google.com/file/d/0B74L4IXjxiwBdHk3OTdCUzF0Ync/view"> 4.Algebra- Hall & Knight</a></h3>

<h3><a href="http://www.iitbooks.co.in/2017/01/practice-papers-for-jee-mains.html"> 5. Previous year IIT-JEE question bank. </a></h3> -->


<h2>Physics</h2>
<?php 
    $result=mysqli_query($connection,"select * from books where subject='Physics'");
    $i=1;
    while($phybook=mysqli_fetch_array($result)){
        echo "<h3><a href='".$phybook['link']."'>$i. ".$phybook['title']." </a></h3>";
        $i=$i+1;
    }
?>

<!-- <h3><a href="https://docs.google.com/uc?id=0B38bwaQZtmsSOW15QlE1dWlraHc&export=download"> 1. Concepts of Physics H.C.Varma.</a></h3>
<h3><a href="https://drive.google.com/file/d/0B_0oxH_pZb4mTk5xdGJUQnNOZ0U/view"> 2.  General Physics by I.E Irodov.</a></h3>

<h3><a href="https://archive.org/details/FundamentalsOfPhysicsHallidayResnickWalker/page/n3"> 3. Fundamentals of Physics by Halliday, Resnick </a></h3> -->


<h2>Chemistry</h2>
<?php 
    $result=mysqli_query($connection,"select * from books where subject='Chemistry'");
    $i=1;
    while($chembook=mysqli_fetch_array($result)){
        echo "<h3><a href='".$chembook['link']."'>$i. ".$chembook['title']." </a></h3>";
        $i=$i+1;
    }
?>

<!-- <h3><a href="http://www.iitbooks.co.in/p/ncert-books-free-download.html"> 1. NCERT textbook and examples</a></h3>

<h3><a href="https://drive.google.com/file/d/0B0d-UkWYmTPha1NkZ0NubEZWUmM/view"> 2. Physical chemistry- P. Bahadur</a></h3>

<h3><a href="https://drive.google.com/file/d/0B0lHkocs8CCCMkJDdVFobkc5S1E/view"> 3. Organic chemistry- M.S. Chauhan </a></h3>

<h3><a href="https://drive.google.com/file/d/1jRYphHUyT7G_7HHkC1xalOnbkrgBXPs_/view"> 4. Inorganic chemistry- JD Lee buy</a></h3>

<h3><a href="https://drive.google.com/file/d/1vp8KKo6XrBmOopYdPha_13tHIS4w9PBc/view"> 5. RC Mukherjee.</a></h3> -->


        </div></div>
        
        <div class="clear h30"></div>
        <div style="display:none;" class="nav_up" id="nav_up"></div>
    </div>    <!-- END of tooplate_main -->

<<div id="tooplate_footer_wrapper">
    <div id="tooplate_footer">
        <div class="col_4">
            <h4>Pages</h4>
            <ul class="nobullet bottom_list">
                <li><a href="index.php">Home</a></li>
                <li><a href="allvideos.php">All Videos</a></li>
                <li><a href="ourmentor.php">Our Mentor</a></li>
               <li><a href="about.html">About</a></li>
                <li><a href="contact.php">Contact</a></li>
<li><a href="t&c.php">Terms and conditons</a></li>
                
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
<script src="js/fastclick.js"></script>
    <script src="js/scroll.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
</body>
</html>