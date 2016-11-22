<?php
  session_start();
  require "../web_app/models/user_home_model.php";
  $userHome = new user_home_model();

if(isset($_GET['id']) AND $_GET['id'] > 0){


   $getID = intval($_GET['id']);
   $user_data = $userHome->get_users_data($getID,"signup");


   if( isset($_SESSION['id']) AND isset($user_data['id']) AND $_SESSION['id'] == $user_data['id']){

       include('../web_app/vieuws/private_home/cm_report.php');

       if(isset($_POST['new_year'])){

           $yearname = htmlspecialchars($_POST['year_name']);
           $yeartheme = htmlspecialchars($_POST['year_theme']);

           if(!empty($yearname) AND !empty($yeartheme)){

               $userHome->insert_users_data('year',$yearname, $yeartheme);


                  // echo $years['year_name'].' '.$years['year_theme'];

           }else{

               $userHome->error('Gave a name and a theme of the current year');

           }

       }

       $year = $userHome->select_users_data('year');
       while($years = $year->fetch()){

           //echo $years['year_name'].' '.$years['year_theme'];

           ?>

            <!--<div class="year_container">

              <a href="" class="years">
                 <h1><?php echo $years['year_name']; ?></h1>
              </a>

              <h3 class="yearTheme"><?php echo $years['year_theme']; ?></h3>

            </div>-->


            <script type="text/javascript">

                        window.addEventListener("load",function(){

                          //var container = document.getElementById("contener");

                          var year = document.querySelector(".year");

                          var yearContainer = document.createElement("div");
                          yearContainer.className = "year_container";

                          var years = document.createElement("a");
                          years.className = "years";
                          years.href = "report?id=<?php echo $_SESSION['id']; ?>&year=<?php echo $years['year_name']; ?>";

                          var year_name = document.createElement("h1");
                          year_name.className = "year-name";
                          year_name.innerHTML = "<?php echo $years['year_name']; ?>";

                          var yearTheme = document.createElement("h2");
                          yearTheme.className = "yearTheme";
                          yearTheme.innerHTML = "<?php echo $years['year_theme']; ?>";

                          years.appendChild(year_name);
                          yearContainer.appendChild(years);
                          //yearContainer.appendChild(year_name);
                          yearContainer.appendChild(yearTheme);

                          year.appendChild(yearContainer);

                            //yearName.innerHTML = "<?php //echo $years['year_name'].' is our  '.$years['year_theme']; ?>";



                        /*  var editShareButt = document.querySelector(".buttEditShare").cloneNode();

                          var editShare = document.querySelectorAll(".editShare");

                          var edite1 = editShare[0].cloneNode();
                          var edite2 = editShare[1].cloneNode();

                          var slideButt = document.querySelector(".buttSlide").cloneNode();

                          var slide = document.querySelectorAll(".slide");

                          var slide1 = slide[0].cloneNode();
                          var slide2 = slide[1].cloneNode();



                          var year = document.querySelector(".year").cloneNode();

                          var mounthContainer = document.querySelector(".mounth-contener").cloneNode();




                                 var mounthPart = document.querySelectorAll(".mounth-part");
                               var mounthPart1 = mounthPart[0].cloneNode();
                                var mounthPart2 = mounthPart[1].cloneNode();
                                var mounthPart3 = mounthPart[2].cloneNode();
                                var mounthPart4 = mounthPart[3].cloneNode();




                                 var mounth = document.querySelectorAll(".mounth");
                               var mounth1 = mounth[0].cloneNode(true);
                                var mounth2 = mounth[1].cloneNode(true);
                                var mounth3 = mounth[2].cloneNode(true);
                                var mounth4 = mounth[3].cloneNode(true);
                                var mounth5 = mounth[4].cloneNode(true);
                                var mounth6 = mounth[5].cloneNode(true);
                                var mounth7 = mounth[6].cloneNode(true);
                                var mounth8 = mounth[7].cloneNode(true);
                                var mounth9 = mounth[8].cloneNode(true);
                                var mounth10 = mounth[9].cloneNode(true);
                                var mounth11 = mounth[10].cloneNode(true);
                                var mounth12 = mounth[11].cloneNode(true);



                          var mounthName = document.querySelector(".mounth-name");





                              mounthPart1.appendChild(mounth1);
                              mounthPart1.appendChild(mounth2);
                              mounthPart1.appendChild(mounth3);

                              mounthPart2.appendChild(mounth4);
                              mounthPart2.appendChild(mounth5);
                              mounthPart2.appendChild(mounth6);

                              mounthPart3.appendChild(mounth7);
                              mounthPart3.appendChild(mounth8);
                              mounthPart3.appendChild(mounth9);

                              mounthPart4.appendChild(mounth10);
                              mounthPart4.appendChild(mounth11);
                              mounthPart4.appendChild(mounth12);



                              mounthContainer.appendChild(mounthPart1);
                              mounthContainer.appendChild(mounthPart2);
                              mounthContainer.appendChild(mounthPart3);
                              mounthContainer.appendChild(mounthPart4);


                              editShareButt.appendChild(edite1);
                              editShareButt.appendChild(edite2);

                              slideButt.appendChild(slide1);
                              slideButt.appendChild(slide2);



                           year.appendChild(mounthContainer);

                             yearName.style.display = 'block';
                            year.style.display = 'flex';
                            editShareButt.style.display = 'flex';
                           slideButt.style.display = 'flex';*/

                            //container.appendChild(yearName);
                            //container.appendChild(editShareButt);
                            //container.appendChild(slideButt);
                            //container.appendChild(year);

                           /* container.insertBefore(yearName, yearName);
                            container.insertBefore(editShareButt, editShareButt);
                            container.insertBefore(slideButt, slideButt);
                            container.insertBefore(year, year);*/





                       })

                      </script>
            <?php

                }


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
