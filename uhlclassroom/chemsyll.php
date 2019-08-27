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
<p style="text-align: center" ><a href="chem11.php"><img src="images/slider/chem11logo.png" alt="image" ></a></p><br>
<p><a href="maths12.php"><img src="images/slider/chem12logo.png" alt="image"></a></p><br>
<?php if (isset ($_SESSION["user_id"])) {?>
</div><div style="width: 150px; margin:0 auto; ">
<p style="text-align:center;"> <a style="color: #00BFFF;" href="logout.php"><img src="images/logout.png" width="150"></a> </p></br></br>
<?php }

?>
</div>

</table>
    
    
</td>
    
    
<!--first end-->
    
<!--- 2nd -->
    
<td width="80%" valign="top">
    


    <div id="tooplate_main">
        <div id="home_about">
            <h2>JEE Main Chemistry Syllabus</h2><br><br>
            <h2>Section A: Physical Chemistry</h2>
            <h3 style="text-align: left;">UNIT 1: Some Basic concepts in Chemistry</h3>
            <p style="text-align: justify;">Matter and its nature, Dalton’s atomic theory; Concept of atom, molecule, element and compound; Physical quantities and their measurements in Chemistry, precision and accuracy, significant figures, S.I. Units, dimensional analysis; Laws of chemical combination; Atomic and molecular masses, mole concept, molar mass, percentage composition, empirical and molecular formulae; Chemical equations and stoichiometry.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 2: States of Matter</h3>
            <p style="text-align: justify;">Classification of matter into solid, liquid and gaseous states.<br>
            <b>Gaseous State:</b>Measurable properties of gases; Gas laws - Boyle’s law, Charle’s law, Graham’s law of diffusion, Avogadro’s law, Dalton’s law of partial pressure; Concept of Absolute scale of temperature; Ideal gas equation, Kinetic theory of gases (only postulates); Concept of average, root mean square and most probable velocities; Real gases, deviation from Ideal behaviour, compressibility factor, van der Waals equation, liquefaction of gases, critical constants.<br>
            <b>Liquid State:</b>Properties of liquids - vapour pressure, viscosity and surface tension and effect of temperature on them (qualitative treatment only).
            <br>
            <b>Solid State:</b>Classification of solids: molecular, ionic, covalent and metallic solids, amorphous and crystalline solids (elementary idea); Bragg’s Law and its applications; Unit cell and lattices, packing in solids (fcc, bcc and hcp lattices), voids, calculations involving unit cell parameters, imperfection in solids; Electrical, magnetic and dielectric properties.</p><br><br>
            

            <h3 style="text-align: left;">UNIT 3: Atomic Structure</h3>
            <p style="text-align: justify;">Discovery of sub-atomic particles (electron, proton and neutron); Thomson and Rutherford atomic models and their limitations; Nature of electromagnetic radiation, photoelectric effect; Spectrum of hydrogen atom, Bohr model of hydrogen atom - its postulates, derivation of the relations for energy of the electron and radii of the different orbits, limitations of Bohr’s model; Dual nature of matter, de-Broglie’s relationship, Heisenberg uncertainty principle.<br>
            Elementary ideas of quantum mechanics, quantum mechanical model of atom, its important features, concept of atomic orbitals as one electron wave functions; Variation of  Ψ and Ψ2 with r for 1s and 2s orbitals; various quantum numbers (principal, angular momentum and magnetic quantum numbers) and their significance; shapes of s, p and d - orbitals, electron spin and spin quantum number; Rules for filling electrons in orbitals - aufbau principle, Pauli’s exclusion principle and Hund’s rule, electronic configuration of elements, extra stability of half-filled and completely filled orbitals.</p><br><br>
            

            <h3 style="text-align: left;">UNIT 4: Chemical Bonding and Molecular Structure</h3>
            <p style="text-align: justify;">Kossel - Lewis approach to chemical bond formation, concept of ionic and covalent bonds.<br>
            <b>Ionic Bonding:</b> Formation of ionic bonds, factors affecting the formation of ionic bonds; calculation of lattice enthalpy.<br>
            <b>Covalent Bonding:</b> Concept of electronegativity, Fajan’s rule, dipole moment; Valence Shell Electron Pair Repulsion (VSEPR) theory and shapes of simple molecules.<br>
            <b>Quantum mechanical approach to covalent bonding:</b> Valence bond theory - Its important features, concept of hybridization involving s, p and d orbitals; Resonance.<br>
            <b>Molecular Orbital Theory -</b> Its important features, LCAOs, types of molecular orbitals (bonding, antibonding), sigma and pi-bonds, molecular orbital electronic configurations of homonuclear diatomic molecules, concept of bond order, bond length and bond energy.<br>Elementary idea of metallic bonding. Hydrogen bonding and its applications.</p><br><br>
            

            <h3 style="text-align: left;">UNIT 5: Chemical Thermodynamics</h3>
            <p style="text-align: justify;"><b>Fundamentals of thermodynamics:</b> System and surroundings, extensive and intensive properties, state functions, types of processes.<br>
            <b>First law of thermodynamics:</b> Concept of work, heat internal energy and enthalpy, heat capacity, molar heat capacity; Hess’s law of constant heat summation; Enthalpies of bond dissociation, combustion, formation, atomization, sublimation, phase transition, hydration, ionization and solution.<br>
            <b>Second law of thermodynamics:</b> Spontaneity of processes; ΔS of the universe and ΔG of the system as criteria for spontaneity, ΔGo (Standard Gibbs energy change) and equilibrium constant.</p><br><br>

            <h3 style="text-align: left;">UNIT 6: Solutions</h3>
            <p style="text-align: justify;">Different methods for expressing concentration of solution - molality, molarity, mole fraction, percentage (by volume and mass both), vapour pressure of solutions and Raoult’s Law - Ideal and non-ideal solutions, vapour pressure - composition, plots for ideal and non-ideal solutions; Colligative properties of dilute solutions - relative lowering of vapour pressure, depression of freezing point, elevation of boiling point and osmotic pressure; Determination of molecular mass using colligative properties; Abnormal value of molar mass, van’t Hoff factor and its significance.</p><br><br>
            
            <h3 style="text-align: left;">UNIT 7: Equilibrium</h3>
            <p style="text-align: justify;">Meaning of equilibrium, concept of dynamic equilibrium.<br>
            <b>Equilibria involving physical processes:</b> Solid -liquid, liquid - gas and solid - gas equilibria, Henry’s law, general characterics of equilibrium involving physical processes.<br>
            <b>Equilibria involving chemical processes:</b> Law of chemical equilibrium, equilibrium constants (Kp and Kc) and their significance, significance of ΔG and ΔGo in chemical equilibria, factors affecting equilibrium concentration, pressure, temperature, effect of catalyst; Le Chatelier’s principle.<br>
            <b>Ionic equilibrium:</b> Weak and strong electrolytes, ionization of electrolytes, various concepts of acids and bases (Arrhenius, Bronsted - Lowry and Lewis) and their ionization, acid - base equilibria (including multistage ionization) and ionization constants, ionization of water, pH scale, common ion effect, hydrolysis of salts and pH of their solutions, solubility of sparingly soluble salts and solubility products, buffer solutions.</p><br><br>
            
            <h3 style="text-align: left;">UNIT 8: Redox Reactions and Electrochemistry</h3>
            <p style="text-align: justify;">Electronic concepts of oxidation and reduction, redox reactions, oxidation number, rules for assigning oxidation number, balancing of redox reactions.<br>
            Eectrolytic and metallic conduction, conductance in electrolytic solutions, specific and molar conductivities and their variation with concentration: Kohlrausch’s law and its applications.<br>
            Electrochemical cells - Electrolytic and Galvanic cells, different types of electrodes, electrode potentials including standard electrode potential, half - cell and cell reactions, emf of a Galvanic cell and its measurement; Nernst equation and its applications; Relationship between cell potential and Gibbs’ energy change; Dry cell and lead accumulator; Fuel cells; Corrosion and its prevention.</p><br><br>


            <h3 style="text-align: left;">UNIT 9: Chemical Kinetics</h3>
            <p style="text-align: justify;">Rate of a chemical reaction, factors affecting the rate of reactions: concentration, temperature, pressure and catalyst; elementary and complex reactions, order and molecularity of reactions, rate law, rate constant and its units, differential and integral forms of zero and first order reactions, their characteristics and half - lives, effect of temperature on rate of reactions - Arrhenius theory, activation energy and its calculation, collision theory of bimolecular gaseous reactions (no derivation).</p><br><br>

            <h3 style="text-align: left;">UNIT 10: Surface Chemistry</h3>
            <p style="text-align: justify;"> <b>Adsorption -</b> Physisorption and chemisorption and their characteristics, factors affecting adsorption of gases on solids - Freundlich and Langmuir adsorption isotherms, adsorption from solutions.
            <br>
            <b>Catalysis -</b> Homogeneous and heterogeneous, activity and selectivity of solid catalysts, enzyme catalysis and its mechanism.<br>
            <b>Colloidal state -</b> distinction among true solutions, colloids and suspensions, classification of colloids - lyophilic, lyophobic; multi molecular, macromolecular and associated colloids (micelles), preparation and properties of colloids - Tyndall effect, Brownian movement, electrophoresis, dialysis, coagulation and flocculation; Emulsions and their characteristics.</p><br><br>


            <h2>Section B: Inorganic Chemistry</h2>


            <h3 style="text-align: left;">UNIT 11: Classification of Elements and Periodicity in Properties</h3>
            <p style="text-align: justify;">Modem periodic law and present form of the periodic table, s, p, d and f block elements, periodic trends in properties of elements­atomic and ionic radii, ionization enthalpy, electron gain enthalpy, valence, oxidation states and chemical reactivity.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 12: General Principles and Process of Isolation of Metals</h3>
            <p style="text-align: justify;">Modes of occurrence of elements in nature, minerals, ores; steps involved in the extraction of metals - concentration, reduction (chemical. and electrolytic methods) and refining with special reference to the extraction of Al, Cu, Zn and Fe; Thermodynamic and electrochemical principles involved in the extraction of metals.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 13: Hydrogen</h3>
            <p style="text-align: justify;">Position of hydrogen in periodic table, isotopes, preparation, properties and uses of hydrogen; Physical and chemical properties of water and heavy water; Structure, preparation, reactions and uses of hydrogen peroxide; Classification of hydrides - ionic, covalent and interstitial; Hydrogen as a fuel.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 14: s - Block Elements (Alkali and Alkaline Earth Metals)</h3>
            <p style="text-align: justify;"><b>Group 1 and Group 2 Elements</b><br>
            General introduction, electronic configuration and general trends in physical and chemical properties of elements, anomalous properties of the first element of each group, diagonal relationships.<br>
            Preparation and properties of some important compounds - sodium carbonate, sodium chloride, sodium hydroxide and sodium hydrogen carbonate; Industrial uses of lime, limestone, Plaster of Paris and cement; Biological significance of Na, K, Mg and Ca.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 15: p - Block Elements</h3>
            <p style="text-align: justify;">
            <b>Group 13 to Group 18 Elements</b>General Introduction: Electronic configuration and general trends in physical and chemical properties of elements across the periods and down the groups; unique behaviour of the first element in each group.<br>Groupwise study of the p – block elements<br>
            <b>Group - 13</b>Preparation, properties and uses of boron and aluminium; Structure, properties and uses of borax, boric acid, diborane, boron trifluoride, aluminium chloride and alums.<br>
            <b>Group - 14</b>Tendency for catenation; Structure, properties and uses of allotropes and oxides of carbon, silicon tetrachloride, silicates, zeolites and silicones.<br>
            <b>Group - 15</b>Properties and uses of nitrogen and phosphorus; Allotrophic forms of phosphorus; Preparation, properties, structure and uses of ammonia, nitric acid, phosphine and phosphorus halides, (PCl3, PCl5); Structures of oxides and oxoacids of nitrogen and phosphorus.<br>
            <b>Group - 16</b>Preparation, properties, structures and uses of dioxygen and ozone; Allotropic forms of sulphur; Preparation, properties, structures and uses of sulphur dioxide, sulphuric acid (including its industrial preparation); Structures of oxoacids of sulphur.<br>
            <b>Group - 17</b>Preparation, properties and uses of chlorine and hydrochloric acid; Trends in the acidic nature of hydrogen halides; Structures of Interhalogen compounds and oxides and oxoacids of halogens.<br>
            <b>Group - 18</b>Occurrence and uses of noble gases; Structures of fluorides and oxides of xenon.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 16: d – and f – Block Elements</h3>
            <p style="text-align: justify;"><b>Transition Elements:</b>General introduction, electronic configuration, occurrence and characteristics, general trends in properties of the first row transition elements - physical properties, ionization enthalpy, oxidation states, atomic radii, colour, catalytic behaviour, magnetic properties, complex formation, interstitial compounds, alloy formation; Preparation, properties and uses of K2Cr2O7 and KMnO4.<br>
            <b>Inner Transition Elements</b><br>
            <b>Lanthanoids -</b> Electronic configuration, oxidation states, chemical reactivity and lanthanoid contraction.<br>
            <b>Actinoids -</b> Electronic configuration and oxidation states.</p>
            <br><br>

            <h3 style="text-align: left;">UNIT 17: Co-ordination Compounds</h3>
            <p style="text-align: justify;">Introduction to co-ordination compounds, Werner’s theory; ligands, co-ordination number, denticity, chelation; IUPAC nomenclature of mononuclear co-ordination compounds, isomerism; Bonding-Valence bond approach and basic ideas of Crystal field theory, colour and magnetic properties; Importance of co-ordination compounds (in qualitative analysis, extraction of metals and in biological systems).</p><br><br>

            <h3 style="text-align: left;">UNIT 18: Environmental Chemistry</h3>

            <p style="text-align: justify;"><b>Environmental pollution -</b> Atmospheric, water and soil.<br>

            <b>Atmospheric pollution -</b> Tropospheric and stratospheric<br>
            <b>Tropospheric pollutants - Gaseous pollutants:</b> Oxides of carbon, nitrogen and sulphur, hydrocarbons; their sources, harmful effects and prevention; Green house effect and Global warming; Acid rain; Particulate pollutants: Smoke, dust, smog, fumes, mist; their sources, harmful effects and prevention.<br>
            <b>Stratospheric pollution -</b> Formation and breakdown of ozone, depletion of ozone layer - its mechanism and effects.<br>
            <b>Water Pollution -</b> Major pollutants such as, pathogens, organic wastes and chemical pollutants; their harmful effects and prevention.<br>
            <b>Soil pollution -</b> Major pollutants such as: Pesticides (insecticides,. herbicides and fungicides), their harmful effects and prevention.<br> 
            Strategies to control environmental pollution.</p><br><br>


            <h1>Section-C: Organic Chemistry</h1>

            <h3 style="text-align: left;">UNIT 19: Purification and Characterisation of Organic Compounds</h3>

            <p style="text-align: justify;">
            <b>Purification -</b> Crystallization, sublimation, distillation, differential extraction and chromatography - principles and their applications.<br>
            <b>Qualitative analysis -</b> Detection of nitrogen, sulphur, phosphorus and halogens.<br>
            <b>Quantitative analysis (basic principles only) -</b> Estimation of carbon, hydrogen, nitrogen, halogens, sulphur, phosphorus.<br>
            Calculations of empirical formulae and molecular formulae; Numerical problems in organic quantitative analysis.</p><br><br>

            <h3 style="text-align: left;">UNIT 20: Some Basic Principles of Organic Chemistry</h3>

            <p style="text-align: justify;">Tetravalency of carbon; Shapes of simple molecules - hybridization (s and p); Classification of organic compounds based on functional groups: - C = C - , - C ? C - and those containing halogens, oxygen, nitrogen and sulphur; Homologous series; Isomerism - structural and stereoisomerism.
            <b>Nomenclature (Trivial and IUPAC)</b><br>
            Covalent bond fission - Homolytic and heterolytic: free radicals, carbocations and carbanions; stability of carbocations and free radicals, electrophiles and nucleophiles.<br>
            <b>Electronic displacement in a covalent bond -</b>Inductive effect, electromeric effect, resonance and hyperconjugation.<br>
            <b>Common types of organic reactions - </b>Substitution, addition, elimination and rearrangement.</p><br><br>

            
            <h3 style="text-align: left;">UNIT 21: Hydrocarbons</h3>

            <p style="text-align: justify;">
            Classification, isomerism, IUPAC nomenclature, general methods of preparation, properties and reactions.<br>
            <b>Alkanes - </b>Conformations: Sawhorse and Newman projections (of ethane); Mechanism of halogenation of alkanes.<br>
            <b>Alkenes - </b>Geometrical isomerism; Mechanism of electrophilic addition: addition of hydrogen, halogens, water, hydrogen halides (Markownikoff’s and peroxide effect); Ozonolysis, oxidation, and polymerization.<br>
            <b>Alkynes -</b> Acidic character; Addition of hydrogen, halogens, water and hydrogen halides; Polymerization.<br>
            <b>Aromatic hydrocarbons -</b> Nomenclature, benzene - structure and aromaticity; Mechanism of electrophilic substitution: halogenation, nitration, Friedel - Craft’s alkylation and acylation, directive influence of functional group in mono-substituted benzene.</p><br><br>

            <h3 style="text-align: left;">UNIT 22: Organic Compounds Containing Halogens</h3>

            <p style="text-align: justify;">General methods of preparation, properties and reactions; Nature of C-X bond; Mechanisms of substitution reactions.<br>Uses; Environmental effects of chloroform, iodoform, freons and DDT.</p><br><br>

            <h3 style="text-align: left;">UNIT 23: Organic Compounds Containing Oxygen</h3>

            <p style="text-align: justify;">General methods of preparation, properties, reactions and uses.<br>
            <b>Alcohols, Phenols and Ethers</b><br>
            Alcohols: Identification of primary, secondary and tertiary alcohols; mechanism of dehydration.<br>
            Phenols: Acidic nature, electrophilic substitution reactions: halogenation, nitration and sulphonation, Reimer - Tiemann reaction.<br>
            Ethers: Structure.<br>
            <b>Aldehyde and Ketones</b><br>
            Nature of carbonyl group; Nucleophilic addition to >C=O group, relative reactivities of aldehydes and ketones; Important reactions such as - Nucleophilic addition reactions (addition of HCN, NH3 and its derivatives), Grignard reagent; oxidation; reduction (Wolff Kishner and Clemmensen); acidity of ? - hydrogen, aldol condensation, Cannizzaro reaction, Haloform reaction; Chemical tests to distinguish between aldehydes and Ketones.<br>
            <b>Carboxylic Acids:</b> Acidic strength and factors affecting it.</p><br><br>

            <h3 style="text-align: left;">UNIT 24: Organic Compounds Containing Nitrogen</h3>

            <p style="text-align: justify;">General methods of preparation, properties, reactions and uses.<br>
            <b>Amines:</b> Nomenclature, classification, structure, basic character and identification of primary, secondary and tertiary amines and their basic character.<br>
            <b>Diazonium Salts:</b> Importance in synthetic organic chemistry.</p><br><br>


            <h3 style="text-align: left;">UNIT 25: Polymers</h3>
            <p style="text-align: justify;">General introduction and classification of polymers, general methods of polymerization - addition and condensation, copolymerization;<br>
            Natural and synthetic rubber and vulcanization; some important polymers with emphasis on their monomers and uses - polythene, nylon, polyester and bakelite.</p><br><br>
            

            <h3 style="text-align: left;">UNIT 26: Bio Molecules</h3>
            <p style="text-align: justify;">General introduction and importance of biomolecules.<br>
            <b>Carbohydrates -</b> Classification: aldoses and ketoses; monosaccharides (glucose and fructose), constituent monosaccharides of oligosacchorides (sucrose, lactose, maltose) and polysaccharides (starch, cellulose, glycogen).<br>
            <b>Proteins -</b> Elementary Idea of amino acids, peptide bond, polypeptides; Proteins: primary, secondary, tertiary and quaternary structure (qualitative idea only), denaturation of proteins, enzymes.<br>
            <b>Vitamins -</b> Classification and functions.<br>
            <b>Nucleic Acids -</b> Chemical constitution of DNA and RNA. Biological functions of nucleic acids.</p><br><br>


   
            <h3 style="text-align: left;">UNIT 27: Chemistry in Everyday Life</h3>
            <p style="text-align: justify;">
            <b>Chemicals in medicines -</b> Analgesics, tranquilizers, antiseptics, disinfectants, antimicrobials, antifertility drugs, antibiotics, antacids, antihistamins - their meaning and common examples.<br>
            <b>Chemicals in food -</b> Preservatives, artificial sweetening agents - common examples.<br>
            <b>Cleansing agents -</b> Soaps and detergents, cleansing action.</p><br><br>
            
            
            <h3 style="text-align: left;">UNIT 28: Principles Related to Practical Chemistry</h3>
            <p style="text-align: justify;"> Detection of extra elements (N,S, halogens) in organic compounds; Detection of the following functional groups: hydroxyl (alcoholic and phenolic), carbonyl (aldehyde and ketone), carboxyl and amino groups in organic compounds.<br>Chemistry involved in the preparation of the following:<br>
            Inorganic compounds: Mohr’s salt, potash alum.<br>
            Organic compounds: Acetanilide, p-nitroacetanilide, aniline yellow, iodoform.<br>Chemistry involved in the titrimetric excercises - Acids bases and the use of indicators, oxalic-acid vs KMnO4, Mohr’s salt vs KMnO4.<br>
            Chemical principles involved in the qualitative salt analysis:<br>
            Cations - Pb2+ , Cu2+, AI3+, Fe3+, Zn2+, Ni2+, Ca2+, Ba2+, Mg2+, NH4+.<br>
            Anions- CO32-, S2-, SO42-, NO2-, NO3-, CI-, Br, I. (Insoluble salts excluded).<br>
            Chemical principles involved in the following experiments:<br>
            1. Enthalpy of solution of CuSO4<br>
            2. Enthalpy of neutralization of strong acid and strong base.<br>
            3. Preparation of lyophilic and lyophobic sols.<br>
            4. Kinetic study of reaction of iodide ion with hydrogen peroxide at room temperature.</p><br><br>
        </div>
          <div class="content_wrapper">
            <div class="col_2">
                <h2>Chemistry Class 11</h2>
               <p style="text-align: center"><a href="chem11.php"><img src="images/slider/chem11logo.png" alt="image" class="img_border img_border_b img_nom" align="middle"></a>
                </a></p>
                
            </div>
            
            <div class="col_2 no_margin_right">
                <h2>Chemistry Class 12</h2>
                <p><a href="chem12.php"><img src="images/slider/chem12logo.png" alt="image" class="img_border img_border_b img_nom" />
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