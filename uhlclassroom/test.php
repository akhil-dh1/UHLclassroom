<?php   
// include('class.phpmailer.php');
// include('class.smtp.php');

// #Email

// 	$Host = "mail.iitmandi.ac.in";                                          // SMTP servers
//         $Username = "eis@iitmandi.ac.in";       // SMTP password
//         $Password = "!!tauth";                                  // SMTP username
//         $From = "eis@iitmandi.ac.in";
//         $FromName = "Test";
//         $Tos = array(
//                 "TA Guide" => "uhlclassroom@gmail.com",
//                 "Research Guide" => "lalit@iitmandi.ac.in"
//         );
//         $Subject = "Request for Scholarship approval";
//         $Body = "Your student, <b>Mr./Ms. </b> has submitted the request for the approval of his/her scholaraship. Please visit below link to approve. <br><br> <a href='https://students.iitmandi.ac.in/scholarship/admin/'>https://students.iitmandi.ac.in/scholarship/admin/</a>";
//         $mail = new PHPMailer();
//     $mail->IsSMTP();                    // send via SMTP
//     $mail->Host     = $Host; 
//     $mail->SMTPAuth = true;                     // turn on SMTP authentication
//     $mail->Username = $Username;  
//     $mail->Password = $Password; 
//     $mail->From     = $From;
//     $mail->FromName = $FromName;
//         foreach($Tos as $key => $val){
//                 $mail->AddAddress($val , $key); 
//         }
//        #         foreach($Ccs as $key => $val){
//         #        $mail->AddCC($val , $key); 
//        # }
//     $mail->WordWrap = 50;                               // set word wrap
//         $mail->Priority = 1; 
//     $mail->IsHTML(true);  
//     $mail->Subject  =  $Subject;
//     $mail->Body     =  $Body;
//     if(!$mail->Send())
//     {
//         echo "Mailer Error: " . $mail->ErrorInfo;
//     }

$connection = mysqli_connect('localhost', 'root', 'LION@567&8#');

if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'cc');
if (!$select_db)
    die("Database Selection Failed" . mysqli_error($connection));
// $id=16;
// $sql = "SELECT * FROM `pm` WHERE (receiver=$id and seen != 'yes')";
// $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
// if ($result->num_rows > 0)
// 	echo "True!";
$dn1 = mysqli_fetch_array(mysqli_query($connection,"select id from pm order by id desc limit 0"));
if($dn1){
	echo "True";
}
else{
	echo "False";
}
?>