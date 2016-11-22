
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
		<meta name="keywords" content=""/>
		<meta name="description" content=""/>
		<meta name="author" content="Yanick 007"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/leader_style/cm_report.css"/>
    <link rel="stylesheet" href="../../public/css/global_style/footer.css"/>
    <link rel="stylesheet" href="../../public/css/global_style/leader_info.css"/>
    <script src="../../public/js/leader_home/cm_report.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="../../public/js/global/footer.js"></script>
    <script src="../../public/js/global/leader_info.js"></script>
    <title>Cel Meeting Report</title>
  </head>
  <body>

    <header>

       <?php  include('../web_app/vieuws/templates/leader_info.php'); ?>

       <div id="editor">

           <div class="edit" id="new"></div>
           <div class="edit"></div>
           <div class="edit"></div>

       </div>

     <div id="contener">

         <form action="" method="post" id="yearName">

             <div id="close"><p>Close</p></div>

            <p id="error">Make a new cell meeting report</p>

             <input type="text" name="year_name" placeholder="Year Name">

             <input type="text" name="year_theme" placeholder="Year Theme">

             <input type="submit" name="new_year" value="Make new report">

         </form>

        <div class="buttEditShare">
          <button class="editShare">Edit</button>

          <button class="editShare">Share</button>
       </div>

       <div class="buttSlide">
          <button class="slide">Prev</button>

          <button class="slide">Next</button>
       </div>
       <!--<h2 class="yearname">je suis le...</h2>-->


        <div class="year">


          <!--  <div class="mounth-contener">

              <div class="mounth-part">

                  <div class="mounth">
                    <h2 class='mounth-name'>January</h2>
                </div>

                <div class="mounth">
                    <h2 class="essai">February</h2>
                </div>

                <div class="mounth">
                    <h2 class='mounth-name'>March</h2>
                </div>

              </div>


               <div class="mounth-part">

                  <div class="mounth">
                    <h2 class='mounth-name'>April</h2>
                </div>

                <div class="mounth">
                    <h2 class='mounth-name'>May</h2>
                </div>

                <div class="mounth">
                    <h2 class='mounth-name'>Jun</h2>
                </div>

              </div>


              <div class="mounth-part">

                  <div class="mounth">
                    <h2 class='mounth-name'>July</h2>
                </div>

                <div class="mounth">
                    <h2 class='mounth-name'>August</h2>
                </div>

                <div class="mounth">
                    <h2 class='mounth-name'>September</h2>
                </div>

              </div>

              <div class="mounth-part">

                  <div class="mounth">
                    <h2 class='mounth-name'>October</h2>
                </div>

                <div class="mounth">
                    <h2 class='mounth-name'>November</h2>
                </div>

                <div class="mounth">
                    <h2 class='mounth-name'>December</h2>
                </div>

              </div>




            </div>-->

        </div>
      </div>

    </header>

    <footer>

        <?php  include('../web_app/vieuws/templates/footer.php'); ?>

    </footer>

    </body>
</html>
