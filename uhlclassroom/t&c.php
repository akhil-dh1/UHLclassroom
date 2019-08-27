
        
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Education Template - Contact</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
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
<script type="text/javascript" src="js/io.socket.js"></script><script type="text/javascript" src="js/main.js"></script>
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

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
    <div id="tooplate_main">
        <div id="tooplate_content" class="left">
            
            <h2><font size="5">WEBSITE USAGE TERMS AND CONDITIONS </font></h2></br>
     <h4>       
    <p style="text-align: justify; width: 800px;">
            
            
If you continue to browse and use this website, you are agreeing to comply with and be bound by the following terms and conditions of use, which together with our privacy policy govern The UHL Classroom’s relationship with you in relation to this website. If you disagree with any part of these terms and conditions, please do not use our website.
The term ‘UHL Classroom’ or ‘us’ or ‘we’ refers to the owner of the website whose registered office is <p>
           <pre style="text-align: justify; font-size: 17px; width: 800px;">
            UHL Project Office
            Above New Chemistry Lab, 
            Stable Complex.
            Kamand Campus, IIT Mandi. 
            Mandi, (H.P.)-175005.
            </pre> 
             <p style="text-align: justify; width: 800px;">
    
The term ‘you’ refers to the user or viewer of our website.The use of this website is subject to the following terms of use:
<pre style="text-align: justify; font-size: 17px; width: 800px;">
•   The content of the pages of this website is for your general information
    and use only. It is subject to change without notice.
•   This website uses cookies to monitor browsing preferences.
•   Neither we nor any third parties provide any warranty or guarantee as  to 
    the accuracy, timeliness, performance, completeness or suitability of the
    information  and  materials  found  or  offered  on  this website for any 
    particular  purpose. You acknowledge  that such information and materials 
    may contain inaccuracies or errors and we expressly exclude liability for
    any such inaccuracies or errors to the fullest extent permitted by law.
•   Your use of any  information  or materials on this website is entirely at 
    your  own  risk, for   which we shall not be liable. It shall be your own 
    responsibility  to  ensure  that  any  products, services  or information 
    available through this website meet your specific requirements.
•   This  website  contains material which is owned by or licensed to us.This 
    material  includes, but  is  not  limited  to, the  design,  layout, look, 
    appearance  and  graphics.  Reproduction  is  prohibited  other  than  in 
    accordance with the copyright notice, which forms part of these terms and 
    conditions.
•   All trademarks reproduced in this website, which are not the property of,
    or licensed to the operator, are acknowledged on the website.
•   Unauthorised use of this website may give rise to a claim for damages and
    /or be a criminal offence.
•   From  time to time, this website may also include links to other websites. 
    These  links  are  provided  for  your  convenience  to  provide  further 
    information. They do not signify that we endorse the  website(s). We have 
    no responsibility for the content of the linked website(s).
•   Your  use of  this website and any dispute arising out of such use of the 
    website is subject to the laws of India.
</pre>

</h4>
            </p>
            
            
        <!--<div id="tooplate_sidebar" class="right">
            <div class="content_wrapper content_mb_60">
                <h3>Categories</h3>
                <ul class="sidebar_link">
                     <li><a href="#">Consectetur adipiscing eli</a></li>
                    <li><a href="#">Nullam vulputate est</a></li>
                    <li><a href="#">Duis porta velit</a></li>
                    <li><a href="#">Pretium suscipit</a></li>
                    <li><a href="#">Nullam eu diam</a></li>
                    <li><a href="#">Duis in libero est</a></li>
                    <li><a href="#">Aenean tincidunt</a></li>
                    <li><a href="#">Morbi tempus iaculis</a></li>
                </ul>
            </div>
            
           <div class="content_wrapper content_mb_60">
                <h3>Recent Comments</h3>
                <ul class="comment_list">
                    <li>
                        <span>Donec rhoncus, neque quis dapibus dapibus, lorem tortor semper est...</span>
                        <span class="comment_meta">
                            <strong>David</strong> on <a href="#">Curabitur Mollis Justo</a>
                        </span>
                    </li>
                    <li>
                        <span>Aliquam erat volutpat. Vestibulum urna libero, fringilla eu faucibus...</span>
                        <span class="comment_meta">
                            <strong>Jame</strong> on <a href="#">Curabitur Mollis Justo</a>
                        </span>
                    </li>
                    <li>
                        <span>Nec fringilla eget elit. Nullam tincidunt, felis rhoncus rhoncus...</span>
                        <span class="comment_meta">
                            <strong>Simon</strong> on <a href="#">Curabitur Mollis Justo</a>
                        </span>
                    </li>
                    <li>
                        <span>Ultricies turpis lectus tristique nulla, nec feugiat felis sapien...</span>
                        <span class="comment_meta">
                            <strong>Snow</strong> on <a href="#">Curabitur Mollis Justo</a>
                        </span>
                    </li>
                </ul>
            </div>
            
        </div>          
        <div class="clear h30"></div>
        <div style="display:none;" class="nav_up" id="nav_up"></div>
    </div>-->    <!-- END of tooplate_main -->

</div></div>
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
