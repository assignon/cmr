<?php

session_start();
//require "../web_app/core/model.php";
require "../web_app/models/report_model.php";
$report = new report_model();

if(isset($_GET['id']) AND $_GET['id'] > 0){


    $getID = intval($_GET['id']);
    $user_data = $report->get_users_data('id',$getID,"signup");


     if( isset($_SESSION['id']) AND isset($user_data['id']) AND $_SESSION['id'] == $user_data['id']){

         include('../web_app/vieuws/private_home/week.php');

       }else{

         echo "you kan't acces without password";
         ?>
             <a href="home">Home page</a>
         <?php

      }

     }else{

        echo "This id don't existe";

     }





 ?>
