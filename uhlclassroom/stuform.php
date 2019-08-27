<?php session_start();
 require_once('connect.php');


    // If the values are posted, insert them into the database.
    if (isset($_POST) & !empty($_POST)){
//$image = addslashes(file_get_contents($_FILES['fileToUpload']['tmp_name']));

        //$image= $_POST['fileToUpload']; 
        $userid = $_POST['userid'];
        $fullname = $_POST['Fullname'];
        $fathername=$_POST['Fathername'];
        $email = $_POST['email'];
        $school = $_POST['school'];
        $address = $_POST['address'];
        $class = $_POST['class'];
        $sql = "INSERT INTO `stuform` (user_id, fullname, fathername, email, school, address, class) VALUES ('$userid','$fullname','$fathername','$email','$school','$address',$class)";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
        if ($result){
            header("Location:myhome1.php");
            exit;
        } else {
        echo "<p> There was an error while submitting form </p>";
                "<p>". mysql_error()."</p>" ;
                }
            //header("location:login.php?msg= User Created Successfully. Please login here. ");
           


        }
    
?>
<?php if (!($_SESSION['usertype']== 'Student'  && $_SESSION['verify_user']=='1') and !($_SESSION['usertype']== 'Vigyan Jyoti Student'  && $_SESSION['verify_user']=='1')){

header("location:login.php?msg= Please log in.");
}?>

    <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Form</title>
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

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

	<title>user registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
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


?>

   
        <table width="100%"><br>
<?php if (isset ($_SESSION["user_id"])) {?>

<p style="text-align:center;font-size:18px; color:green; text-align:center; "> Hi <?php echo $_SESSION["username"];

?>( <?php echo $_SESSION["user_id"];?>) </p>
<?php
}
else

{
?>

<p style="text-align:center;font-size:18px; color:red;"> Hi  (<a href="login.php">Please login </a>)</p>
<?php }

?></div>
<div style="width: 150px; margin:0 auto; ">

<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "stuform.php"> Student Form</a></p>
<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "myhome1.php"> Home page</a></p>
<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "list_pm.php"> Inbox</a></p>



<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="logout.php">Logout </a> </p>
</br></br>


<!--<img src="img/fundedby.jpg" width="196">
</br>
<p style="text-align:center;">Department of Science and Technology under STRI Scheme.<br><i><b>Click below</b> to know more</i>
<a href="http://www.scienceandsociety-dst.org"><img src="img/download.png" alt="DST" width="120"></a></p>
<img src="img/impbynew.jpg" width="196">
<p style="text-align:center;"><img src="img/iitmandi_logo.jpg" width="120"></p> -->

</div>

</table>
    
    
</td>
    
    
<!--first end-->
    
<!--- 2nd -->

    
<td width="80%" valign="top">
    
    

<div class="container">

<!--<form method="post" enctype="multipart/form-data">
    </form>-->
<form  action="upload1.php" method="post" enctype="multipart/form-data">
Select image to upload(Size<500kb):
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    </form>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please fill the form</h2>
        


    <label for="input Name" class="sr-only">Full Name</label>
        <input type="text" name="Fullname" id="inputname" class="form-control" placeholder="Full Name" required autofocus>
        <label for="Father's Name" class="sr-only">Father's Name</label>
        <input type="text" name="Fathername" id="inputfathersname" class="form-control" placeholder="Father's Name" required autofocus>
        <label for="user id" class="sr-only">User id</label>
        <input type="int" name="userid" id="inputid" class="form-control" placeholder="User id" required autofocus>
    <label for="input Email" class="sr-only">Email address</label>
        <input type="varchar" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
        <label for="School" class="sr-only">School</label>
        <input type="varchar" name="school" id="inputschool" class="form-control" placeholder="School" required autofocus>
        <label for="address" class="sr-only">Address</label>
        <input type="text" name="address" id="inputaddress" class="form-control" placeholder="Address" required>
        <label for="input class" class="sr-only">Class</label>
        <input type="int" name="class" id="inputclass" class="form-control" placeholder="Class" required>
     
        <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
      </form><a href="jotform.php">Additional Form</p>

</div>
</tr></table>
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
