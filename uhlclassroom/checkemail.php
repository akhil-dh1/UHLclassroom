<?php

        session_start();

        error_reporting(E_ALL ^ E_DEPRECATED);

        $host = 'localhost';
        $user = 'root';
        $pass = 'LION@567&8#';

         mysql_connect($host, $user, $pass);

          mysql_select_db('cc');

        $email = $_GET['email']; 

        $data = "";


       $sql = "select * from login where email = '$email'";

       $resu = mysql_query($sql);
       
       $count = 0;

       while($temp = mysql_fetch_assoc($resu))
       {
            $count ++;

        }

       if ($count > 0)
       {
            $data  = "email already exist";
       }
        else
       {
          $data = "you can register";
       }
         echo $data;
?>