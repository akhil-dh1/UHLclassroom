<?php session_start();?>
<?php if (!($_SESSION['user_id'] && $_SESSION['usertype']== 'Mentor')){

header("location:login.php?msg= Please log in.");

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
<script type="text/javascript" src="js/io.socket.js"></script><script type="text/javascript" src="js/main.js"></script>
<script type="text/JavaScript" src="js/jquery-1.6.3.js"></script> 

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

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
        <li><a href="#">JEE Syllabus</a>
                <ul>
                    <li><a href="mathsyll.php">Mathematics</a></li>
                    <li><a href="chemsyll.php">Chemistry</a></li>
                    <li><a href="physyll.php">Physics</a></li>
                </ul>
        </li>
        <li><a href="ourmentor.php">Our Mentors</a></li>
        <li><a href="Books.php">Books</a></li>
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
<span style="font-size:30px;float:left; margin-top: 25px;cursor:pointer" onclick="openNav()">&#9776; </span>

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
   <?php if (isset ($_SESSION['user_id'] )){?>


    <tr></br></br>
    <td width="15%" style="border-right:dotted #006600 thin;" valign="top">    
        <table width="100%"><br>
<div style="width: 200px; margin:-10px; ">
<?php
 if ($_SESSION["usertype"]=='Mentor' && $_SESSION['verify_user']=='1') {

 require_once('connect.php');
$id = $_SESSION["user_id"];


$sql = "SELECT image FROM `mentor_image` WHERE user_id='".$id."' ";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()){        
        echo '<dd>'?>
     <img src="<?php echo $row['image'];?>" width="150" height="200" style="margin:0px" >
     <?php
     '</dd>';
    
}?>

 </div>
<?php
} else {?>
<div style="width: 150px; margin:30px; ">
    <p><img src="images/slider/pp.png" width="150" style="margin:0px"></p>
 <?php   
}
} 

?></div>
<div style="width: 150px; margin:10px; ">

<?php
 if ($_SESSION["usertype"]=='Student' or $_SESSION['usertype']=='Vigyan Jyoti Student'&& $_SESSION['verify_user']=='1') {

 require_once('connect.php');
$id = $_SESSION["user_id"];


$sql = "SELECT image FROM `stu_image` WHERE user_id='".$id."' ";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()){        
        echo '<dd>'?>
     <img src="<?php echo $row['image'];?>" width="150" height="200" style="margin:-23px">
     <?php
     '</dd>';
    
}?>
</div>
 
<?php
} else {?>
<div style="width: 150px; margin:25px; ">
    <p><img src="images/slider/pp.png" width="150"></p>
 <?php   
}
} 

?></div>
</br>
<div style="width: 150px; margin:20px; ">

<?php if (isset ($_SESSION["user_id"])) { ?>

<p style="text-align:center;font-size:18px; color:green;"> Hi <?php echo $_SESSION["username"];
?>( <?php echo $_SESSION["user_id"];?>) </p>
<?php
}
else

{
?>

<p style="text-align:center;font-size:18px; color:red;"> Hi  (<a href="login.php"><b>Please login <</a>)</p></div>
<?php }
?></div>
<div style="width: 150px; margin:30px; ">
<?php if($_SESSION['user_id'] && $_SESSION['verify_user']==1){
 $id=(int)$_SESSION['user_id'];
 if ($_SESSION['usertype']=='Mentor' or $_SESSION['usertype']=='Admin')
 {?>

<p style="text-align:center;"><a style="color: #00BFFF;" href= "addlec.php"> <img src="images/addvid.png" width="150"></a></p>
<?php }
 
 if ($_SESSION['usertype']=='Mentor')
 {?>
<p style="text-align:center;"><a style="color: #00BFFF;" href= "mentorform.php"> <img src="images/mentorform.png" width="150"></a></p>
<p style="text-align:center;"><a style="color: #00BFFF;" href= "myhome.php"> <img src="images/home.png" width="150"></a></p>
<?php
$sql = "SELECT * FROM `pm` WHERE receiver=$id and seen != 'yes'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
if ($result->num_rows > 0) {?>
<p style="text-align:center;"><a style="color: #00BFFF;" href= "list_pm.php"> <img src="images/inbox_unread.png" width="150" ></a></p>
<?php
}
else{?>
<p style="text-align:center;"><a style="color: #00BFFF;" href= "list_pm.php"> <img src="images/inboxx.png" width="150" ></a></p>
<?php }
}

if ($_SESSION['usertype']=='Admin')
{
$sql = "SELECT * FROM `pm` WHERE (receiver=$id and seen != 'yes')";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
if ($result->num_rows > 0) {?>
<p style="text-align:center;"><a style="color: #00BFFF;" href= "list_pm.php"> <img src="images/inbox_unread.png" width="150" ></a></p>
<?php
}
else{?>
<p style="text-align:center;"><a style="color: #00BFFF;" href= "list_pm.php"> <img src="images/inboxx.png" width="150" ></a></p>
<?php }?>

<p style="text-align:center;"> <a style="color: #00BFFF;" href="update.php"><img src="images/updatementor.png" width="150"> </a> </p>
<?php }

?>

<?php if ($_SESSION['usertype']=='Admin')
{?>
<p style="text-align:center;"> <a style="color: #00BFFF;" href="update1.php"><img src="images/updatestudent.png" width="150"> </a> </p>


<?php } }

?>
<?php if ($_SESSION['usertype']=='Mentor' & $_SESSION['verify_user']=='1' or $_SESSION['usertype']=='Admin')
 {?>
<p style="text-align:center;"> <a style="color: #00BFFF;" href="videos1.php"><img src="images/myvid.png" width="150"> </a> </p>
<p style="text-align:center;"> <a style="color: #00BFFF;" href="logout.php"><img src="images/logout.png" width="150"></a> </p>
<?php }

?>

</div>
<div style="width: 150px; margin:25px; ">
<?php if($_SESSION['usertype']=='Student' or $_SESSION['usertype']=='Vigyan Jyoti Student' && $_SESSION['verify_user']=='1'){?>
<p style="text-align:center;"><a style="color: #00BFFF;" href= "stuform.php"> <img src="images/stuform.png"  height="39" width="150"></a></p>
<p style="text-align:center;"><a style="color: #00BFFF;" href= "myhome1.php"> <img src="images/home.png" width="150"></a></p>
<?php
$sql = "SELECT * FROM `pm` WHERE (receiver=$id and seen != 'yes')";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
if ($result->num_rows > 0) {?>
<p style="text-align:center;"><a style="color: #00BFFF;" href= "list_pm.php"> <img src="images/inbox_unread.png" width="150" ></a></p>
<?php
}
else{?>
<p style="text-align:center;"><a style="color: #00BFFF;" href= "list_pm.php"> <img src="images/inboxx.png" width="150" ></a></p>
<?php }?>
<p style="text-align:center;"> <a style="color: #00BFFF;" href="logout.php"><img src="images/logout.png" width="150"></a> </p></div>
<?php
}
?>
<?php if($_SESSION['user_id'] && !($_SESSION['verify_user']==1)){?>
<div style="width: 150px; margin:-5px; ">
<p style="text-align:center;"> <a style="color: #00BFFF;" href="logout.php"><img src="images/logout.png" width="150"></a> </p>
<?php } ?>
</div>


</br></br></div>
<?php } ?>

</div>

</table>
    
    
</td>
    
    
<!--first end-->
    
<!--- 2nd -->
    
<td width="80%" valign="top">
    
    

   <!-- <div style="height:400px; overflow:scroll; overflow-x:hidden;"> -->
    
 <div id="tooplate_slider_wrapper">
    <div id="tooplate_slider">
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="images/slider/school1.png" alt="" title="#caption1" />
                <img src="images/slider/school2.jpg" alt="" title="#caption2" />
                 <img src="images/slider/01.jpg" alt="" title="#caption1" />
                <img src="images/slider/03.jpg" alt="" title="#caption3" />                
            </div>
            <div id="caption1" class="nivo-html-caption">
                <h1 style="font-size: 40px;">Welcome to UHL Classroom</h1>
                <p>This virtual classroom is specially designed for helping students in the rural area who want to compete in various technical exams after their school</p>
            </div>
            <div id="caption2" class="nivo-html-caption">
                <h1 style="font-size: 40px;">Focus</h1>
                <p>For our UHL classroom, we are targeting the students of 90 different Govt. Sen. Sec. Schools of District Mandi(HP).</p>
            </div>
            <div id="caption3" class="nivo-html-caption">
                <h1 style="font-size: 40px;">Vision</h1>
                <p>We will select two students of class 11 from each school and guide them in the course of two years for the preparation of various technical exams and help them to clear their basic concepts in various subjects related to the exams through our video lectures and interactive sessions.</p>
            </div>
        </div>
                <script type="text/javascript" src="js/jquery-1.6.3.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
        $(window).load(function() {
            $('#slider').nivoSlider({
            effect: 'fade',
            controlNav: true, // 1,2,3... navigation
            directionNav: false,
            animSpeed: 800, // Slide transition speed
            pauseTime: 4000, // How long each slide will show
            });
        });
        </script>   
    </div> <!-- END of slider -->
</div>
    <div id="tooplate_main">
        <div id="home_about">
            <h1>Hi, this is UHL Classroom!</h1>
            <p>This virtual classroom is specially designed for helping students in the rural area who want to compete in various technical exams after their school. For our UHL classroom, we are targeting the students of 90 different Govt. Sen. Sec. Schools of District Mandi(HP). We will select two students of class 11 from each school and guide them in the course of two years for the preparation of various technical exams and help them to clear their basic concepts in various subjects related to the exams through our video lectures and interactive sessions.</p>
           </p>
        </div>
        <div class="content_wrapper content_mb_60">
        	<div class="col_4">
            	<img src="images/slider/logomaths.png" alt="image" class="img_border img_border_b img_nom" />
                <p>JEE Main Mathematics Syllabus <a href="mathsyll.php">More...</a></p>
            </div>
            <div class="col_4">
            	<img src="images/slider/logochem.png" alt="image" class="img_border img_border_b img_nom" />
                <p>JEE Main Chemistry Syllabus <a href="chemsyll.php">More...</a></p>
            </div>
            <div class="col_4">
            	<img src="images/slider/phylogo.png" alt="image" class="img_border img_border_b img_nom" />
                <p>JEE Main Physics Syllabus<a href="physyll.php">More...</a></p>
            </div>
            <div class="col_4 no_margin_right">
            	<img src="images/slider/wordslogo.png" alt="image" class="img_border img_border_b img_nom" />
                <p>Motivational videos <a href="#">More...</a></p>
            </div>
        </div>
  		<div class="content_wrapper">
            <div class="col_2">
                <h2 style="text-align: center">About UHL Center</h2>
                <p style="text-align: justify">UHL: The Centre for Uplifting Himalayan Livelihood (UHL) is a proposed centre at newly established IIT Mandi, in Himachal Pradesh. It derives its origin from the mission statement of IIT Mandi. It states that, among many others one of the aim of IIT Mandi is:<br>

To inculcate a spirit of entrepreneurship and to impart the ability to devise globally recognized solutions for the problems of society and industry, particularly in the fragile eco-system of the Himalayas.<br>

The centre strives to create an environment conducive to the research and implementation of ideas in fulfilment of the above spirit.</p>
 <a href="http://uhl.iitmandi.ac.in/index.html" class="more">More</a>
			</div>
            
            <div class="col_2 no_margin_right">
                <h2 style="text-align: center">Our other projects</h2>
           	  	<p>We are working on various other projects in our UHL Center. Below is the list of following:</p>
               <ul class="list_bullet">
                    <li class="col_4">Pine Niddles</li>
                    <li class="col_4">Azolla</li>
                    <li class="col_4">UBA</li>
                    <li class="col_4">AADL</li>
                    <li class="col_4">IUATC</li>
                    
                </ul><br>
                <a href="http://uhl.iitmandi.ac.in/project.html" class="more">More</a>
            </div>	
        </div>
        
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

</body>
</html>