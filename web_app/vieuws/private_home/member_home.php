<?php

    session_start();
 //require "../web/vieuws/template/template-class/header.class.php";
  require "../web_app/models/user_home_model.php";
  $userHome = new user_home_model();
 if(isset($_GET['id']) AND $_GET['id'] > 0){


    $getID = intval($_GET['id']);

    $user_data = $userHome->get_users_data($getID,"signup");

if(  $_SESSION['id'] == $user_data['id']){
     if(  $_SESSION['id'] == 3){}


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/user_home.css"/>
    <script src="../../public/js/user_home.js"></script>
    <title>CMR</title>
  </head>
  <body>
   
    <header>
    
         <h1><?php echo $user_data['grade']; ?></h1>
    
    </header>
    
    <footer>
        
        
        
    </footer>
    
    </body>
</html>


<?php
   }else{

      header("Location: user_home?id=".$_SESSION['id']);

   }
 }else{

     echo  "cet id n existe pas";
 }
?>
