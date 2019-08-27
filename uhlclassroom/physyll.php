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
<p style="text-align: center" ><a href="phy11.php"><img src="images/slider/phy11logo.png" alt="image" ></a></p></br>
<p><a href="phy12.php"><img src="images/slider/phy12logo.png" alt="image"></a></p><br>
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
            <h2>JEE Main Physics Syllabus<br><br></h2>
            <p>The syllabus contains two Sections - A and B. Section - A pertains to the Theory Part having 80% weightage, while Section - B contains Practical Component (Experimental Skills) having 20% weightage.</p>
            <h2>Section-A</h2>
            <h3 style="text-align: left;">UNIT 1: Physics and Measurement</h3>
            <p style="text-align: justify;">Physics, technology and society, S I units, Fundamental and derived units. Least count, accuracy and precision of measuring instruments, Errors in measurement, Significant figures. Dimensions of Physical quantities, dimensional analysis and its applications.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 2: Kinematics</h3>
            <p style="text-align: justify;">Frame of reference. Motion in a straight line: Position-time graph, speed and velocity. Uniform and non-uniform motion, average speed and instantaneous velocity Uniformly accelerated motion, velocity-time, position- time graphs, relations for uniformly accelerated motion. Scalars and Vectors, Vector addition and Subtraction, Zero Vector, Scalar and Vector products, Unit Vector, Resolution of a Vector. Relative Velocity, Motion in a plane, Projectile Motion, Uniform Circular Motion.</p><br><br>
            

            <h3 style="text-align: left;">UNIT 3: Laws of Motion</h3>
            <p style="text-align: justify;">Force and Inertia, Newton’s First Law of motion; Momentum, Newton’s Second Law of motion; Impulse; Newton’s Third Law of motion. Law of conservation of linear momentum and its applications, Equilibrium of concurrent forces.<br>
            Static and Kinetic friction, laws of friction, rolling friction.<br>
            Dynamics of uniform circular motion: Centripetal force and its applications.</p><br><br>
            

            <h3 style="text-align: left;">UNIT 4: Work, Energy and Power</h3>
            <p style="text-align: justify;">Work done by a constant force and a variable force; kinetic and potential energies, work energy theorem, power.Potential energy of a spring, conservation of mechanical energy, conservative and non-conservative forces; Elastic and inelastic collisions in one and two dimensions.</p><br><br>
            

            <h3 style="text-align: left;">UNIT 5: Rotational Motion</h3>
            <p style="text-align: justify;">Centre of mass of a two-particle system, Centre of mass of a rigid body; Basic concepts of rotational motion; moment of a force, torque, angular momentum, conservation of angular momentum and its applications; moment of inertia, radius of gyration. Values of moments of inertia for simple geometrical objects, parallel and perpendicular axes theorems and their applications. Rigid body rotation, equations of rotational motion.</p><br><br>

            <h3 style="text-align: left;">UNIT 6: Gravitation</h3>
            <p style="text-align: justify;">The universal law of gravitation. Acceleration due to gravity and its variation with altitude and depth. Kepler’s laws of planetary motion. Gravitational potential energy; gravitational potential. Escape velocity. Orbital velocity of a satellite. Geo-stationary satellites.</p><br><br>
            
            <h3 style="text-align: left;">UNIT 7: Properties of Solids and Liquids</h3>
            <p style="text-align: justify;">Elastic behaviour, Stress-strain relationship, Hooke’s Law, Young’s modulus, bulk modulus, modulus of rigidity. Pressure due to a fluid column; Pascal’s law and its applications. Viscosity, Stokes’ law, terminal velocity, streamline and turbulent flow, Reynolds number. Bernoulli’s principle and its applications. Surface energy and surface tension, angle of contact, application of surface tension - drops, bubbles and capillary rise. Heat, temperature, thermal expansion; specific heat capacity, calorimetry; change of state, latent heat. Heat transfer- conduction, convection and radiation, Newton’s law of cooling.</p><br><br>
            
            <h3 style="text-align: left;">UNIT 8: Thermodynamics</h3>
            <p style="text-align: justify;">Thermal equilibrium, zeroth law of thermodynamics, concept of temperature. Heat, work and internal energy. First law of thermodynamics. Second law of thermodynamics: reversible and irreversible processes. Carnot engine and its efficiency.</p><br><br>


            <h3 style="text-align: left;">UNIT 9: Kinetic Theory of Gases</h3>
            <p style="text-align: justify;">Equation of state of a perfect gas, work doneon compressing a gas.Kinetic theory of gases - assumptions, concept of pressure. Kinetic energy and temperature: rms speed of gas molecules; Degrees of freedom, Law of equipartition of energy,applications to specific heat capacities of gases; Mean free path, Avogadro’s number.</p><br><br>

            <h3 style="text-align: left;">UNIT 10: Oscillations and Waves</h3>
            <p style="text-align: justify;"> Periodic motion - period, frequency, displacement as a function of time. Periodic functions. Simple harmonic motion (S.H.M.) and its equation; phase; oscillations of a spring -restoring force and force constant; energy in S.H.M. - kinetic and potential energies; Simple pendulum - derivation of expression for its time period; Free, forced and damped oscillations, resonance.<br>
            Wave motion. Longitudinal and transverse waves, speed of a wave. Displacement relation for a progressive wave. Principle of superposition of waves, reflection of waves, Standing waves in strings and organ pipes, fundamental mode and harmonics, Beats, Doppler effect in sound</p><br><br>


            <h3 style="text-align: left;">UNIT 11: Electrostatics</h3>
            <p style="text-align: justify;">Electric charges: Conservation of charge, Coulomb’s law-forces between two point charges, forces between multiple charges; superposition principle and continuous charge distribution.<br>
            Electric field: Electric field due to a point charge, Electric field lines, Electric dipole, Electric field due to a dipole, Torque on a dipole in a uniform electric field.<br>
            Electric flux, Gauss’s law and its applications to find field due to infinitely long uniformly charged straight wire, uniformly charged infinite plane sheet and uniformly charged thin spherical shell. Electric potential and its calculation for a point charge, electric dipole and system of charges; Equipotential surfaces, Electrical potential energy of a system of two point charges in an electrostatic field.<br>
            Conductors and insulators, Dielectrics and electric polarization, capacitor, combination of capacitors in series and in parallel, capacitance of a parallel plate capacitor with and without dielectric medium between the plates, Energy stored in a capacitor.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 12: Current Electricity</h3>
            <p style="text-align: justify;">Electric current, Drift velocity, Ohm’s law, Electrical resistance, Resistances of different materials, V-I characteristics of Ohmic and nonohmic conductors, Electrical energy and power, Electrical resistivity, Colour code for resistors; Series and parallel combinations of resistors; Temperature dependence of resistance.<br>
            Electric Cell and its Internal resistance, potential difference and emf of a cell, combination of cells in series and in parallel. Kirchhoff’s laws and their applications. Wheatstone bridge, Metre bridge. Potentiometer - principle and its applications.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 13: Magnetic Effects of Current and Magnetism</h3>
            <p style="text-align: justify;">Biot - Savart law and its application to current carrying circular loop. Ampere’s law and its applications to infinitely long current carrying straight wire and solenoid. Force on a moving charge in uniform magnetic and electric fields. Cyclotron.<br>
            Force on a current-carrying conductor in a uniform magnetic field. Force between two parallel current-carrying conductors-definition of ampere. Torque experienced by a current loop in uniform magnetic field; Moving coil galvanometer, its current sensitivity and conversion to ammeter and voltmeter.<br>Current loop as a magnetic dipole and its magnetic dipole moment. Bar magnet as an equivalent solenoid, magnetic field lines; Earth’s magnetic field and magnetic elements. Para-, dia- and ferro- magnetic substances.<br>Magnetic susceptibility and permeability, Hysteresis, Electromagnets and permanent magnets.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 14: Electromagnetic Induction and Alternating Currents</h3>
            <p style="text-align: justify;">Electromagnetic induction; Faraday’s law, induced emf and current; Lenz’s Law, Eddy currents. Self and mutual inductance. Alternating currents, peak and rms value of alternating current/ voltage; reactance and impedance; LCR series circuit, resonance; Quality factor, power in AC circuits, wattless current. AC generator and transformer.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 15: Electromagnetic Waves</h3>
            <p style="text-align: justify;">Electromagnetic waves and their characteristics. Transverse nature of electromagnetic waves.<br>
            Electromagnetic spectrum (radio waves, microwaves, infrared, visible, ultraviolet, Xrays, gamma rays). Applications of e.m. waves.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 16: Optics</h3>
            <p style="text-align: justify;">Reflection and refraction of light at plane and spherical surfaces, mirror formula, Total internal reflection and its applications, Deviation and Dispersion of light by a prism, Lens Formula, Magnification, Power of a Lens, Combination of thin lenses in contact, Microscope and Astronomical Telescope (reflecting and refracting) and their magnifying powers.<br>Wave optics: wavefront and Huygens’ principle, Laws of reflection and refraction using Huygen’s principle. Interference, Young’s double slit experiment and expression for fringe width, coherent sources and sustained interference of light. Diffraction due to a single slit, width of central maximum. Resolving power of microscopes and astronomical telescopes, Polarisation, plane polarized light; Brewster’s law, uses of plane polarized light and Polaroids.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 17: Dual Nature of Matter and Radiation</h3>
            <p style="text-align: justify;">Dual nature of radiation. Photoelectric effect, Hertz and Lenard’s observations; Einstein’s photoelectric equation; particle nature of light. Matter waves-wave nature of particle, de Broglie relation. Davisson-Germer experiment.</p><br><br>

            <h3 style="text-align: left;">UNIT 18: Atoms and Nuclei</h3>

            <p style="text-align: justify;">Alpha-particle scattering experiment; Rutherford’s model of atom; Bohr model, energy levels, hydrogen spectrum. Composition and size of nucleus, atomic masses, isotopes, isobars; isotones. Radioactivity-alpha, beta and gamma particles/rays and their properties; radioactive decay law. Mass-energy relation, mass defect; binding energy per nucleon and its variation with mass number, nuclear fission and fusion.</p><br><br>


            

            <h3 style="text-align: left;">UNIT 19: Electronic Devices</h3>

            <p style="text-align: justify;">Semiconductors; semiconductor diode: I-V characteristics in forward and reverse bias; diode as a rectifier; I-V characteristics of LED, photodiode, solar cell and Zener diode; Zener diode as a voltage regulator. Junction transistor, transistor action, characteristics of a transistor; transistor as an amplifier (common emitter configuration) and oscillator. Logic gates (OR, AND, NOT, NAND and NOR). Transistor as a switch.</p><br><br>

            <h3 style="text-align: left;">UNIT 20: Communication Systems</h3>

            <p style="text-align: justify;">Propagation of electromagnetic waves in the atmosphere; Sky and space wave propagation, Need for modulation, Amplitude and Frequency Modulation, Bandwidth of signals, Bandwidth of Transmission medium, Basic Elements of a Communication System (Block Diagram only)</p><br><br>

            <h2>Section-B</h2>
            <h3 style="text-align: left;">UNIT 21: Experimental Skills</h3>

            <p style="text-align: justify;">
            Familiarity with the basic approach and observations of the experiments and activities:<br>
            1.Vernier callipers - its use to measure internal and external diameter and depth of a vessel.<br>
            2.Screw gauge-its use to determine thickness/diameter of thin sheet/wire.<br>
            3.Simple Pendulum-dissipation of energy by plotting a graph between square of amplitude and time.<br>
            4.Metre Scale - mass of a given object by principle of moments.<br>
            5.Young’s modulus of elasticity of the material of a metallic wire.<br>
            6.Surface tension of water by capillary rise and effect of detergents.<br>
            7.Co-efficient of Viscosity of a given viscous liquid by measuring terminal velocity of a given spherical body.<br>
            8.Plotting a cooling curve for the relationship between the temperature of a hot body and time.<br>
            9.Speed of sound in air at room temperature using a resonance tube.<br>
            10.Specific heat capacity of a given (i) solid and (ii) liquid by method of mixtures.<br>
            11.Resistivity of the material of a given wire using metre bridge.<br>
            12.Resistance of a given wire using Ohm’s law.<br>
            13.Potentiometer - (i) Comparison of emf of two primary cells. (ii) Determination of internal resistance of a cell.<br>
            14.Resistance and figure of merit of a galvanometer by half deflection method.<br>
            15.Focal length of: (i) Convex mirror (ii) Concave mirror, and (iii) Convex lens using parallax method.<br>
            16.Plot of angle of deviation vs angle of incidence for a triangular prism.<br>
            17.Refractive index of a glass slab using a travelling microscope.<br>
            18.Characteristic curves of a p-n junction diode in forward and reverse bias.<br>
            19.Characteristic curves of a Zener diode and finding reverse break down voltage.<br>
            20.Characteristic curves of a transistor and finding current gain and voltage gain.<br>
            21.Identification of Diode, LED, Transistor, IC, Resistor, Capacitor from mixed collection of such items.<br>
            22.Using multimeter to: (i) Identify base of a transistor (ii) Distinguish between npn and pnp type transistor (iii) See the unidirectional flow of current in case of a diode and an LED. (iv) Check the correctness or otherwise of a given electronic component (diode, transistor or IC).</p><br><br> 
           
        </div>
          <div class="content_wrapper">
            <div class="col_2">
                <h2>Physics Class 11</h2>
               <p style="text-align: center"><a href="phy11.php"><img src="images/slider/phy11logo.png" alt="image" class="img_border img_border_b img_nom" align="middle"></a>
               </a> </p>
                
            </div>
            
            <div class="col_2 no_margin_right">
                <h2>Physics Class 12</h2>
                <p><a href="phy12.php"><img src="images/slider/phy12logo.png" alt="image" class="img_border img_border_b img_nom" />
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