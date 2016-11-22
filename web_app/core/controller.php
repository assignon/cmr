<?php

  class controller{

      public function __construct(){

         //require 'model.php';
         require 'vieuw.php';

      }

      protected function vieuw($vieuw){

        return new $vieuw;

      }

      protected function model($model){
        require 'model.php';
        return new $model;

      }

      public function session_checked($html){

        session_start();
        require "../web_app/models/user_home_model.php";
        $userHome = new user_home_model();

      if(isset($_GET['id']) AND $_GET['id'] > 0){


         $getID = intval($_GET['id']);
         $user_data = $userHome->get_users_data($getID,"signup");


         if( isset($_SESSION['id']) AND isset($user_data['id']) AND $_SESSION['id'] == $user_data['id']){

               $html;

       }else{

         echo "you kan't acces without password";
         ?>
             <a href="home">Home page</a>
         <?php
       }
      }else{

        echo "cet id n existe pas";

      }


     }

  }

 ?>
