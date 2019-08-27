<?php session_start();?>


 
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
        <table width="100%"><br><br>
<div style="width: 150px; margin:0 auto; ">
     <?php if (isset($_SESSION['user_id'])){?>
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

?>

<?php
 if ($_SESSION["usertype"]=='Student' or $_SESSION['usertype']=='Vigyan Jyoti Student' && $_SESSION['verify_user']=='1') {

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
}
?></div>
<br>
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

?><br><div style="width: 150px; margin:15px; ">
<p style="text-align: center" ><a href="maths11.php"><img src="images/slider/logomaths11.png" alt="image" ></a></p><br>
<p><a href="maths12.php"><img src="images/slider/logomaths12.png" alt="image" /></a></p><br>
</div><div style="width: 150px; margin:0 auto; ">
<?php if (isset ($_SESSION["user_id"])) {?>
<p style="text-align:center;"> <a style="color: #00BFFF;" href="logout.php"><img src="images/logout.png" width="150"></a> </p></br></br>
<?php
}?>
</div>

</table>
    
    
</td>
    
    
<!--first end-->
    
<!--- 2nd -->
    
<td width="80%" valign="top">
    


 
    <div id="tooplate_main">
        <div id="home_about">
            <h2>JEE Main Mathematics Syllabus</h2><br>
            <h3 style="text-align: left;">UNIT 1: Sets, Relations and Functions</h3>
            <p style="text-align: justify;">Sets and their representation; Union, intersection and complement of sets and their algebraic properties; Power set; Relation, Types of relations, equivalence relations, functions;. one-one, into and onto functions, composition of function</p><br><br>
            <h3 style="text-align: left;">UNIT 2: Complex Numbers and Quadratic Equations</h3>
            <p style="text-align: justify;">Complex numbers as ordered pairs of reals, Representation of complex numbers in the form a+ib and their representation in a plane, Argand diagram, algebra of complex numbers, modulus and argument (or amplitude) of a complex number, square root of a complex number, triangle inequality, Quadratic equations in real and complex number system and their solutions. Relation between roots and co-efficients, nature of roots, formation of quadratic equations with given roots.</p><br><br>
            <h3 style="text-align: left;">UNIT 3: Matrices and Determinants</h3>
            <p style="text-align: justify;">Matrices, algebra of matrices, types of matrices, determinants and matrices of order two and three. Properties of determinants, evaluation of determinants, area of triangles using determinants. Adjoint and evaluation of inverse of a square matrix using determinants and elementary transformations, Test of consistency and solution of simultaneous linear equations in two or three variables using determinants and matrices.</p><br><br>
            <h3 style="text-align: left;">UNIT 4: Permutations and Combinations</h3>
            <p style="text-align: justify;">Fundamental principle of counting, permutation as an arrangement and combination as selection, Meaning of P (n,r) and C (n,r), simple applications.</p><br><br>
            <h3 style="text-align: left;">UNIT 5: Mathematical Induction</h3>
            <p style="text-align: justify;">Principle of Mathematical Induction and its simple applications.</p><br><br>
            <h3 style="text-align: left;">UNIT 6: Binomial Theorem</h3>
            <p style="text-align: justify;">Binomial theorem for a positive integral index, general term and middle term, properties of Binomial coefficients and simple applications.</p><br><br>
            <h3 style="text-align: left;">UNIT 7: Sequences and Series</h3>
            <p style="text-align: justify;">Arithmetic and Geometric progressions, insertion of arithmetic, geometric means between two given numbers. Relation between A.M. and G.M. Sum upto n terms of special series: Sn, Sn2, Sn3. Arithmetico - Geometric progression.</p><br><br>
            <h3 style="text-align: left;">UNIT 8: Limit, Continuity and Differentiability</h3>
            <p style="text-align: justify;">Real - valued functions, algebra of functions, polynomials, rational, trigonometric, logarithmic and exponential functions, inverse functions. Graphs of simple functions. Limits, continuity and differentiability. Differentiation of the sum, difference, product and quotient of two functions. Differentiation of trigonometric, inverse trigonometric, logarithmic, exponential, composite and implicit functions; derivatives of order upto two. Rolle’s and Lagrange’s Mean Value Theorems. Applications of derivatives: Rate of change of quantities, monotonic - increasing and decreasing functions, Maxima and minima of functions of one variable, tangents and normals.</p><br><br>
            <h3 style="text-align: left;">UNIT 9: Integral Calculus</h3>
            <p style="text-align: justify;">Integral as an anti - derivative. Fundamental integrals involving algebraic, trigonometric, exponential and logarithmic functions. Integration by substitution, by parts and by partial fractions. Integration using trigonometric identities.<br>

Evaluation of simple integrals of the type
<img src="images/slider/mathsyll.png">

<br>

Integral as limit of a sum. Fundamental Theorem of Calculus. Properties of definite integrals. Evaluation of definite integrals, determining areas of the regions bounded by simple curves in standard form.</p><br><br>
<h3 style="text-align: left;">UNIT 10: Differential Equations</h3>
            <p style="text-align: justify;"> Ordinary differential equations, their order and degree. Formation of differential equations. Solution of differential equations by the method of separation of variables, solution of homogeneous and linear differential equations of the type:<img src="images/slider/mathsyll1.png"></p><br><br>
            <h3 style="text-align: left;">UNIT 11: Co-ordinate Geometry</h3>
            <p style="text-align: justify;">Cartesian system of rectangular co-ordinates in a plane, distance formula, section formula, locus and its equation, translation of axes, slope of a line, parallel and perpendicular lines, intercepts of a line on the coordinate axes.
<br>
<b>Straight lines</b>

Various forms of equations of a line, intersection of lines, angles between two lines, conditions for concurrence of three lines, distance of a point from a line, equations of internal and external bisectors of angles between two lines, coordinates of centroid, orthocentre and circumcentre of a triangle, equation of family of lines passing through the point of intersection of two lines.
<br>
<b>Circles, conic sections</b>
<br>
Standard form of equation of a circle, general form of the equation of a circle, its radius and centre, equation of a circle when the end points of a diameter are given, points of intersection of a line and a circle with the centre at the origin and condition for a line to be tangent to a circle, equation of the tangent. Sections of cones, equations of conic sections (parabola, ellipse and hyperbola) in standard forms, condition for y = mx + c to be a tangent and point (s) of tangency.</p><br><br>

<h3 style="text-align: left;">UNIT 12: Three Dimensional Geometry</h3>
            <p style="text-align: justify;">Coordinates of a point in space, distance between two points, section formula, direction ratios and direction cosines, angle between two intersecting lines. Skew lines, the shortest distance between them and its equation. Equations of a line and a plane in different forms, intersection of a line and a plane, coplanar lines.</p><br><br>
            <h3 style="text-align: left;">UNIT 13: Vector Algebra</h3>
            <p style="text-align: justify;">Vectors and scalars, addition of vectors, components of a vector in two dimensions and three dimensional space, scalar and vector products, scalar and vector triple product.</p><br><br>
            <h3 style="text-align: left;">UNIT 14: Statistics and Probability</h3>
            <p style="text-align: justify;"><b>Measures of Dispersion<br></b>

Calculation of mean, median, mode of grouped and ungrouped data. Calculation of standard deviation, variance and mean deviation for grouped and ungrouped data.
<br>
<b>Probability<br></b>

Probability of an event, addition and multiplication theorems of probability, Baye’s theorem, probability distribution of a random variate, Bernoulli trials and Binomial distribution.</p><br><br>
<h3 style="text-align: left;">UNIT 15: Trigonometry</h3>
            <p style="text-align: justify;">Trigonometrical identities and equations. Trigonometrical functions. Inverse trigonometrical functions and their properties. Heights and Distances.</p><br><br>
            <h3 style="text-align: left;">UNIT 16: Mathematical Reasoning</h3>
            <p style="text-align: justify;"> Statements, logical operations and, or, implies, implied by, if and only if. Understanding of tautology, contradiction, converse and contrapositive.</p><br><br>
        </div>
          <div class="content_wrapper">
            <div class="col_2">
                <h2>Mathematics Class 11</h2>
               <p style="text-align: center"><a href="maths11.php"><img src="images/slider/logomaths11.png" alt="image" class="img_border img_border_b img_nom" align="middle">
               </a> </p>
                
            </div>
            
            <div class="col_2 no_margin_right">
                <h2>Mathematics Class 12</h2>
                <p><a href="maths12.php"><img src="images/slider/logomaths12.png" alt="image" class="img_border img_border_b img_nom" />
                </p>
                
                
            </div>  
        </div>
        
        <div class="clear h30"></div>
        <div style="display:none;" class="nav_up" id="nav_up"></div>
    </div>   <!--END of tooplate_main -->

  </tr></table>
  


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