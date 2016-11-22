

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/leader_style/leader_home.css"/>
    <link rel="stylesheet" href="../../public/css/global_style/footer.css"/>
    <link rel="stylesheet" href="../../public/css/global_style/leader_info.css"/>
    <script src="../../public/js/leader_home/leader_home.js"></script>
    <script src="../../public/js/global/leader_info.js"></script>
    <script src="../../public/js/global/footer.js"></script>
    <title>CMR</title>
  </head>
  <body>

    <header>

       <?php  include('../web_app/vieuws/templates/leader_info.php'); ?>

           <div id="cellOutline">

               <div class="cellManager">

                 <a href="CellMeeting_report?id=<?php echo $_SESSION['id']; ?>"><img src="../../public/images/cellReportIcons/cellMeeting.png" alt=""></a>
                 <p>Cell Meeting Report </p>

               </div>

               <div class="cellManager">

                 <a href=""><img src="../../public/images/cellReportIcons/visitationRaport.png" alt=""></a>
                 <p>First Timers Report </p>

               </div>

               <div class="cellManager">

                 <a href=""><img src="../../public/images/cellReportIcons/souls.png" alt=""></a>
                 <p>Soulwinning Report</p>

               </div>

               <div class="cellManager">

                <a href=""><img src="../../public/images/cellReportIcons/outreachProgram.png" alt=""></a>
                <p>OutReach Program</p>

               </div>

               <div class="cellManager">

                 <a href=""><img src="../../public/images/cellReportIcons/mounthReport.png" alt=""></a>
                 <p>Cell Mounth Report</p>

               </div>

               <div class="cellManager">

                  <a href=""><img src="../../public/images/cellReportIcons/attendance.png" alt=""></a>
                  <p>Cell Attendance Record</p>

               </div>

               <div class="cellManager">

                  <a href=""><img src="../../public/images/cellReportIcons/testimonies.png" alt=""></a>
                  <p>Special Testimonies</p>

               </div>

           </div>



    </header>

    <footer>

      <?php  include ('../web_app/vieuws/templates/footer.php'); ?>

    </footer>

    </body>
</html>


<?php
/*
                          header("Location: leader_home?id=".$_SESSION['id']);

                      }else if($user_data['grade'] == 'assi-leader'){

                          header("Location: leader_assistant_home?id=".$_SESSION['id']);

                      }else if($user_data['grade'] == "member"){

                          header("Location: member_home?id=".$_SESSION['id']);

                      }

?>*/
