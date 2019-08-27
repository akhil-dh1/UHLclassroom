<?php session_start();
include_once("connect.php");
?>
<?php if (!($_SESSION['user_id'] && $_SESSION['verify_user']== '1')){

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
            <li><a href="allvideos.php">All Videos</a>
                <ul>
                    <li><a href="maths11.php">Maths Class11</a></li>
                    <li><a href="maths12.php">Maths Class12</a></li>
                    <li><a href="phy11.php">Physics Class11</a></li>
                    <li><a href="phy12.php">Physics Class12</a></li>
                    <li><a href="chem11.php">Chemistry Class11</a></li> 
                    <li><a href="chem12.php">Chemistry Class12</a></li>                                                                     
                </ul>
            </li>
           <li><a href="#">JEE Syllabus</a>
                <ul>
                    <li><a href="mathsyll.php">Mathematics</a></li>
                    <li><a href="physyll.php">Chemistry</a></li>
                    <li><a href="chemsyll.php">Physics</a></li>
                </ul>
            </li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="ourmentor.php">Our Mentors</a></li>                
            <li class="last"><a href="contact.php" class="last">Contact Us</a></li>
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


$sql = "SELECT image FROM `mentor_image` WHERE user_id='".$id."' ";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()){        
        echo '<dd>'?>
     <img src="<?php echo $row['image'];?>" width= '150' height='200'/>
     <?php
     '</dd>';
     
}?>

 
<?php
} else {?>
    <p><img src="images/slider/pp.png" width="150"></p>
 <?php   
}


?>
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
 <?php if ($_SESSION['usertype']=='Mentor' or $_SESSION['usertype']=='Admin')
 {?>
<p><a style="color: #ffffff;" class="btn btn-lg btn-info btn-block"  href= "addlec.php"> Add video</a></p>
<?php
}?>

<?php if ($_SESSION['usertype']=='Mentor' or $_SESSION['usertype']=='Admin')
 {?>

<p> <a style="color: #ffffff;" class="btn btn-lg btn-info btn-block" href="videos1.php">My videos </a> </p>
<?php
}?>
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
<div id="tooplate_footer_wrapper" >
 <div class="col_2" align="right">
<?php

 require_once('connect.php');
$id = $_GET['id'];


$sql = "SELECT image FROM `mentor_image` WHERE user_id='".$id."' ";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()){        
        echo '<dd>'?>
     <img src="<?php echo $row['image'];?>" width= '150' height='200'/>
     <?php
     '</dd>';
     
}?>

 
<?php
} else {
    echo "0 results";
    
}


?>

</div>
<div class="col_2 no_margin_right">
<?php

 require_once('connect.php');
$id = $_GET['id'];


$sql = "SELECT * FROM `mentorform` WHERE user_id='".$id."' ";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));


if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()){        
        echo 
          "<br>"."<b>.Name: " . $row["fullname"]. "<br>"." .Email: ". $row["email"]. "<br>"." . Qualification: " . $row["quali"]. "<br>" ." . Institute: " . $row["insti"]. "<br>" ." . Occupation: " . $row["occupation"]. "<br>";
     
}?>

 
<?php
} else {
    echo "0 results";
    
}


?>
</div>
</div><br><br><br>
<br><br><br><br>
<br><br><br><br>
<br>
<div class="container">
<div class="row">
    
    <h2>Mentors Video</h2>
    
    <?php
 require_once('connect.php');


$id = $_GET['id'];
$sql = "SELECT * FROM `vid_lecture` WHERE user_id='".$id."'";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()){
?>
<div class="col-md-4">
<a href="video_single.php?vid_id=<?php echo $row['vid_id'];?>">
<img src="https://ytimg.googleusercontent.com/vi/<?php echo $row['vid_code'];?>/default.jpg" height="120" width="220"><br>
<?php
        echo "Videoname: " . $row["Name"]. "<br>"." - Description: " . $row["Description"]. "<br>";
 ?></a> <br><br> </div><?php  }

}  else {
    echo "0 results";
    
}

$connection->close();
?> 
 
</div></div>
  </tr></table>
  <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://uhliit.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

  <!-- tooplate_footer -->

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
