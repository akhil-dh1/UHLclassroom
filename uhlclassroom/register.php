<?php
//for sending e-mails
include('class.phpmailer.php');
include('class.smtp.php');
    require_once('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST) & !empty($_POST)){
        $username = $_POST['username'];
	      $email = $_POST['email'];
        $password = $_POST['password'];
        $usertype = $_POST['user_type'];
        $sql = "SELECT * FROM `login` where username='$username'";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result)>0){
            ?>
            <script>
                alert('Username already in use.');
            </script>
        <?php
        }
        $sql = "INSERT INTO `login` (username, password, email, usertype,verify_user,loggedInCount) VALUES ('$username', '$password', '$email','$usertype',0,1)";

        $result = mysqli_query($connection, $sql);
        if($result){




#Email

	$Host = "mail.iitmandi.ac.in";                                          // SMTP servers
        $User = "";       // SMTP password
        $Pass = "!!tauth";                                  // SMTP username
        $From = "eis@iitmandi.ac.in";
        $FromName = "UHL";
        $Tos = array(
                "TA Guide" => "",
                "Research Guide" => ""
        );
        $Subject = "New User Register";
        $Body = "A new user $username has been registered";
        $mail = new PHPMailer();
    $mail->IsSMTP();                    // send via SMTP
    $mail->Host     = $Host;
    $mail->SMTPAuth = true;                     // turn on SMTP authentication
    $mail->Username = $User;
    $mail->Password = $Pass;
    $mail->From     = $From;
    $mail->FromName = $FromName;
        foreach($Tos as $key => $val){
                $mail->AddAddress($val , $key);
        }
       #         foreach($Ccs as $key => $val){
        #        $mail->AddCC($val , $key);
       # }
    $mail->WordWrap = 50;                               // set word wrap
        $mail->Priority = 1;
    $mail->IsHTML(true);
    $mail->Subject  =  $Subject;
    $mail->Body     =  $Body;
    if(!$mail->Send())
    {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
        header("location:login.php");
        exit;
        }else{
            $fmsg= "User Registration Failed";

        }
    }
?>
    <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2067 Education
http://www.tooplate.com/view/2067-education
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<script type="text/JavaScript" src="js/jquery-1.6.3.js"></script>
<script type="text/javascript" src="js/io.socket.js"></script><script type="text/javascript" src="js/main.js"></script>
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



<div class="container">
    <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	   <!--<span class="input-group-addon" id="basic-addon1">@</span>-->
	       <input type="text" name="username" class="form-control" placeholder="Username" required>
                <label for="user type" class="sr-only">User Type</label>
                <select class="form-control" name="user_type">
                    <option value="">Select user type</option>
                    <option value="Mentor">Mentor</option>
                    <option value="Student">Student</option>
                    <option value="Vigyan Jyoti Student">Vigyan Jyoti Student</option>
                </select>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <!-- <input type="text" name="username" placeholder="Username" required>
            <label for="user type">User Type</label>
            <select name="user_type">
                <option value="">Select user type</option>
                <option value="mentor">Mentor</option>
                <option value="student">student</option>
                <option value="vjstudent">vjstudent</option>
            </select>
            <label for="inputEmail">Email address</label>
            <input type="email" name="email" id="inputEmail" placeholder="Email address" required autofocus>
            <label for="inputPassword">Password</label>
            <input type="password" name="password" id="inputPassword" placeholder="Password" required> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit" >Register</button>
        <a class="btn btn-lg btn-primary btn-block" href="login.php" style="color:white;">Login</a>
        </div>
    </form>
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
 /
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
