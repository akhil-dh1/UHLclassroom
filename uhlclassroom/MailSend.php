<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php

        session_start();

        error_reporting(E_ALL ^ E_DEPRECATED);

        $host = 'localhost';
        $user = 'root';
        $pass = 'LION@567&8#';

         mysql_connect($host, $user, $pass);

          mysql_select_db('cc');

          $password = $_POST["password"];
          $email = $_POST["email"];


        echo  $_SESSION["email"]=$email;
          $_SESSION["password"]=$password;

          $a = rand(100,999999);
           //echo $a;
            $_SESSION["random"]=$a;

         $to = $email;
         $subject = "Your Registration Varification Code";
         
         $message = $a;
         
         $header = "From:uhlclassroom@gmail.com \r\n";
         $header = "Cc:uhlclassroom@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
$retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
           // echo "Message sent successfully...";
              echo "check your email for verification code".'<br>';
            
            $sql = "insert into random values (NULL,'$email',$a)";
            mysql_query($sql);

            include ('VerifyEmail.php');

         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>				