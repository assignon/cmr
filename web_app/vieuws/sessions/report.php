<?php

session_start();
//require "../web_app/core/model.php";
require "../web_app/models/report_model.php";
$report = new report_model();

if(isset($_GET['id']) AND $_GET['id'] > 0){


    $getID = intval($_GET['id']);
    $user_data = $report->get_users_data('id',$getID,"signup");


     if( isset($_SESSION['id']) AND isset($user_data['id']) AND $_SESSION['id'] == $user_data['id']){

         include('../web_app/vieuws/private_home/report.php');

         if(isset($_GET['year']) AND !empty($_GET['year'])){

             $getYear = intval(htmlspecialchars($_GET['year']));
             $month = $report->get_users_data('year_name',$getYear,'year');

         }



          $month_query = $report->getPDO()->query("SELECT*FROM month");

          $month_query->fetch();

          if(isset($_POST['update_Mtheme'])){

             $month_name = $_POST['month_name'];
             $month_theme = $_POST['month_theme'];
             $year = $getYear;

             if(!empty($month_name) AND !empty($month_theme) AND !empty($year)){

                   $select = $report->getPDO()->prepare("SELECT*FROM month WHERE month_name=?");
                   $select->execute(array($month_name));
                   $month_count = $select->rowCount();

                   if($month_count == 0){

                       $reportInsert = $report->getPDO()->prepare("INSERT INTO month(month_name, month_theme, year, user_id) VALUES(?,?,?,?)");
                       $reportInsert->execute(array($month_name, $month_theme, $year, $_SESSION['id']));
                       //header("Location: report?id=".$_SESSION['id']."&year=".$year."&month=".$getMonth);



                   }else{

                     echo "This month al ready exist...";

                   }

             }else{

                echo "Fill all";

             }

          }

           $report->select_month($_SESSION['id'],$getYear);
           $report->createMonth($getYear, $_SESSION['id']);
           //$report->insert_month('update_Mtheme',$report->POST('month_name'),$report->POST('month_theme'),$getYear);



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
