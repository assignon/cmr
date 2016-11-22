<?php

  session_start();
  require '../web_app/models/login_model.php';
$login = new login();
 
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/home.css"/>
    <script src="../../public/js/home.js"></script>
    <title>CMR</title>
  </head>
  <body>
   
    <header>
    
      <div id="menu">
         
          <img src="" alt="logo" id="logo">
          
          <div id="recovery">
           
            <img src="" alt="pass-recovery">
            <a href="">Password recovery</a>
            
          </div>
          <p id="signIn_error"></p>
          
          <form action="" method="post">
              
              <input type="text" name="name" placeholder="Name">
          
              <input type="password" name='pass' placeholder="Password">
          
              <input type="submit" name="sign_in" value="Sign in">
              
          </form>
          
      </div>
      <?php  $login->signIn('sign_in','name','pass'); ?>
      
      <div id="contener1">
        
       
              
               <img src="" alt="logo">
               
               <p id="explain">
                   
                   Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de standaard proeftekst in deze bedrijfstak sinds de 16e eeuw, toen een onbekende drukker een zethaak met letters nam en ze door elkaar husselde om een font-catalogus te maken. Het heeft niet alleen vijf eeuwen overleefd maar is ook, vrijwel onveranderd, overgenomen in elektronische letterzetting. Het is in 
                   
               </p>
               
               <div id="form">
                  
                   <p id="error">Sign Up</p>
                   
                 <form action="" method="post">
                   
                   <input type="text" name="name" placeholder="Leider name / Member name">
                   
                   <input type="text" name="cell" placeholder="Cell name">
                   
                   <select name="grade" id="" required>
                       
                       <option value="">Your Grade</option>
                       <option value="leader">Leader </option>
                       <option value="assi-leader">Leader assistant</option>
                       <option value="member">Cell member</option>
                       
                   </select>
                   
                   <input type="email" name="email" placeholder="Email">
                   
                   <input type="email" name="email_conf" placeholder="Email confirmation">
                   
                   <input type="password" name="password" placeholder="Password">
                   
                   <input type="password" name="password_conf" placeholder="Password confirmation">
                   
                   <input type="submit" name="signUp" value="Sign Up">
                   
               </form>
                   
             </div>
              <?php
                  $login->check_registration('signUp','name','email','email_conf','cell','grade','password','password_conf');
               ?>
               
        
        
        </div>
        
        <div id="contener4">
           
            <div id="outrech" class="best">
                
                <h1>Best Outreach Of The Mounth</h1>
                <div class="videos">
                    
                  <video src="" controls></video>
                  <video src="" controls></video>
                  <video src="" controls></video>
                    
                </div>
                
            </div>
            
            <div id="testimony" class="best">
                
                <h1>Best Testimony Of The Mounth</h1>
                <div class="videos">
                    
                  <video src="" controls></video>
                  <video src="" controls></video>
                  <video src="" controls></video>
                    
                </div>
                
            </div>
            
        </div>
        
        <div id="contener2">
            <div class="content2"></div>
            <div class="content2"></div>
            <div class="content2"></div>
        </div>
        
        <div id="contener3">
            <div class="content3"></div>
            <div class="content3"></div>
            <div class="content3"></div>
        </div>
      
    
    </header>
    
    
    <footer>
        
        
        
    </footer>
    
    </body>
    
</html>
