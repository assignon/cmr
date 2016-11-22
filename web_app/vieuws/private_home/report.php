<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/leader_style/report.css"/>
    <!--<link rel="stylesheet" href="../../public/css/global_style/footer.css"/>-->
    <link rel="stylesheet" href="../../public/css/global_style/leader_info.css"/>
    <script src="../../public/js/leader_home/report.js"></script>
    <script src="../../web_app/models/ajax_request/reportAjax.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="../../public/js/global/footer.js"></script>
    <script src="../../public/js/global/leader_info.js"></script>
    <title>Cel Meeting Report</title>
  </head>
    <body>

       <header>

         <?php  include('../web_app/vieuws/templates/leader_info.php'); ?>

           <div id="month-container">

               <div id="month-menu">

                 <a href="CellMeeting_report?id=<?php echo $_SESSION['id']; ?>" class="menus" id="return">Return</a>

                  <button class="menus" id="vieuw">Vieuw</button>

                  <button class="menus" id="edit">Edit</button>

               </div>

               <div id="month">

                 <div class="months" id="form">


                    <form action="">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                        <input type="text">
                    </form>


                 </div>

                 <div class="months" id="report">

                      <form action="" method="post" id="monthEdit">

                          <span id="close">Close</span>

                          <p class="error"></p>

                          <input type="text" name="month_name" placeholder="Month Name" id="monthName">

                          <textarea name="month_theme" id="monthTheme" cols="30" rows="10" placeholder="Gave a theme an the month"></textarea>

                          <input type="submit" name="update_Mtheme" value="Update and Save" id="submite">

                      </form>

                      <div id="weekContainer">

                      </div>

                     <div id="month-englobe">

                      <!--<div class="mois">

                          <h2>January</h2>
                          <p class="month-theme"></p>

                          <div class="butt">

                             <a href=""><button class="view">View</button></a>

                             <button class="edit">Edit</button>

                          </div>

                      </div>

                      <div class="mois">


                          <h2>February</h2>
                          <p class="month-theme"></p>

                          <div class="butt">
                             <button class="view">View</button>
                             <button class="edit">Edit</button>
                          </div>

                      </div>


                      <div class="mois">

                          <h2>March</h2>
                          <p class="month-theme"></p>

                          <div class="butt">
                             <button class="view">View</button>
                             <button class="edit">Edit</button>

                          </div>

                      </div>

                      <div class="mois">

                          <h2>April</h2>

                          <p class="month-theme"></p>

                          <div class="butt">
                             <button class="view">View</button>
                             <button class="edit">Edit</button>
                          </div>

                      </div>

                      <div class="mois">


                          <h2>May</h2>
                          <p class="month-theme"></p>

                          <div class="butt">
                             <button class="view">View</button>
                             <button class="edit">Edit</button>
                          </div>

                      </div>


                      <div class="mois">

                          <h2>Juny</h2>
                          <p class="month-theme"></p>

                          <div class="butt">
                             <button class="view">View</button>

                             <button class="edit">Edit</button>
                          </div>

                      </div>

                      <div class="mois">

                          <h2>July</h2>

                          <p class="month-theme"></p>

                          <div class="butt">
                             <button class="view">View</button>
                             <button class="edit">Edit</button>
                          </div>

                      </div>

                      <div
                         class="mois">

                          <h2>August</h2>
                          <p class="month-theme"></p>

                          <div class="butt">
                             <button class="view">View</button>
                             <button class="edit">Edit</button>

                          </div>

                      </div>

                      <div class="mois">

                          <h2>September</h2>

                          <p class="month-theme"></p>

                          <div class="butt">
                             <button class="view">View</button>
                             <button class="edit">Edit</button>
                          </div>

                      </div>

                      <div class="mois">

                          <h2>October</h2>
                          <p class="month-theme"></p>

                          <div class="butt">
                             <button class="view">View</button>
                             <button class="edit">Edit</button>
                          </div>

                      </div>

                      <div class="mois">

                          <h2>November</h2>

                          <p class="month-theme"></p>

                          <div class="butt">
                             <button class="view">View</button>
                             <button class="edit">Edit</button>
                          </div>

                      </div>

                      <div class="mois">

                          <h2>December</h2>

                          <p class="month-theme"></p>

                          <div class="butt">
                             <button class="view">View</button>
                             <button class="edit">Edit</button>
                          </div>

                      </div>-->


                 </div>

               </div>
               </div>

           </div>


      </header>
      <footer>

         <?php // include('../web_app/vieuws/templates/footer.php'); ?>

      </footer>

   </body>
</html>
