<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/leader_style/week.css"/>
    <!--<link rel="stylesheet" href="../../public/css/global_style/footer.css"/>-->
    <link rel="stylesheet" href="../../public/css/global_style/leader_info.css"/>
    <script src="../../public/js/leader_home/week.js"></script>
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

         <div id="weekContainer">
             <form action="" method="post" id="weekForm">

                 <button id="close">Close</button>
                 <p id="error">il est erreur</p>
                 <input type="text" name="week_name" placeholder="Week Name" id="weekName">
                 <input type="submit" name="create_week" value="Create Week" id="saveWeek">

             </form>

             <div id="addWeek">

                <!-- <div class="weeks"></div>
                 <div class="weeks"></div>
                 <div class="weeks"></div>
                 <div class="weeks"></div>-->
                 <button id="newWeek">Add A New Week</button>

             </div>

         </div>

       </header>

   </body>
</html>
