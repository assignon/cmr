<?php

   /**
    *
    */
   require '../web_app/core/model.php';
   class report_model extends model
   {

     private $month_name;
     private $month_theme;
     private $year;

     function __construct()
     {
       parent::__construct();
     }

     public function get_users_data($where,$id,$table_name){

        $req = $this->prepare_fetch("SELECT*FROM $table_name WHERE $where=?",[$id]);
        return $req;


     }

     public function insert_month($submit,$month_name,$month_theme,$year){

         if(isset($submit)){

            $this->month_name = $this->POST($month_name);
            $this->month_theme = $this->POST($month_theme);
            $this->year = $year;

            if(!empty($this->month_name) AND !empty($this->month_theme) AND !empty($this->year) AND isset($this->month_name) AND isset($this->month_theme) AND isset($this->year)){

                  $select = $this->prepare("SELECT*FROM month WHERE month_name=?",array($this->month_name));
                  $month_count = $select->rowCount();

                  if($month_count == 0){

                      $this->prepare("INSERT INTO month(month_name, month_theme, year, user_id) VALUES(?,?,?,?)", array($this->month_name, $this->month_theme, $this->year, $_SESSION['id']));
                      //header("Location: report?id=".$_SESSION['id']."&year=".$year."&month=".$this->POST($month_name));

                  }else{

                    ?>

                       <script type="text/javascript">

                             var submit = document.getElementById("submite");
                             var error = document.querySelector(".error");
                             alert("<?php  echo 'This month al ready exist...';?>");
                          /* submit.addEventListener("click", function(e){

                                 e.preventDefault();
                                 error.innerHTML = "<?php  //echo 'This month al ready exist...';?>";

                          })*/

                       </script>

                    <?php



                  }

            }else{

               echo "Fill all";

            }

         }


     }


     public function select_month($id,$year){



         $select = $this->prepare("SELECT*FROM month WHERE user_id=? AND year=? ", array($id, $year));


         while($month = $select->fetch()){

            ?>

               <script type="text/javascript">

                   window.addEventListener("load", function(){

                     var englobe = document.getElementById("month-englobe");
                     var submite = document.getElementById("submite");

                     var mois = document.createElement("div");
                     mois.className = "mois";

                     var monthName = document.createElement("h2");
                     monthName.className = "month_name";
                     monthName.innerHTML = "<?php echo $month['month_name'] ?>";

                     var monthTheme = document.createElement("p");
                     monthTheme.className = "month-theme";
                     monthTheme.innerHTML = "<?php echo $month['month_theme'] ?>";

                     var buttons = document.createElement("div");
                     buttons.className = "butt";

                     var buttLink = document.createElement("a");
                     buttLink.className = "buttLink";
                     buttLink.href = "week?id=<?php echo $_SESSION['id'];?>&year=<?php echo $year;?>&month=<?php echo $month['month_name'];?>";

                     var vieuw = document.createElement("button");
                     vieuw.className = "vieuw";

                     var edit = document.createElement("button");
                     edit.className = "edit";



                          buttLink.appendChild(vieuw);
                             buttons.appendChild(buttLink);
                             buttons.appendChild(edit);

                             mois.appendChild(monthName);
                             mois.appendChild(monthTheme);
                             mois.appendChild(buttons);

                             englobe.appendChild(mois);



                    /*  for(var i = 0; i < vieuw.length; i++){

                         var vieuwArr = vieuw[i];

                         vieuwArr.addEventListener("click", function(e){
                            //vieuwArr.parentNode.href="week?id=<?php //echo $_SESSION['id'];?>";
                           var targetBottom = e.target.parentNode.offsetTop;
                           var targetLeft = e.target.parentNode.offsetLeft;
                           var windowH = window.pageYOffset;


                        /*   $(function(){


                             $(weekContainer).animate({

                                 top: windowH,
                                 //marginBottom: 30

                               },{

                                 easing: 'easeOutBounce',
                                 duration: 1000

                             })


                           })


                             week.appendChild(weekName);
                             weekContainer.appendChild(week);

                         })

                       }*/


                   })

               </script>

            <?php

         }

     }


     public function createMonth($year_name,$id){


          $year = $this->getPDO()->prepare("SELECT*FROM year WHERE year_name=?");
          $year->execute(array($year_name));
          while ($years = $year->fetch()) {

            ?>

                 <script type="text/javascript">

                    window.addEventListener("load", function(){

                       var englobe = document.getElementById("month-englobe");




                         var addMois = document.createElement("div");
                         addMois.className = "mois";

                         var monthName = document.createElement("h2");
                         monthName.className = "month_name";
                         monthName.innerHTML = "Add A New Month";



                         addMois.appendChild(monthName);

                          englobe.appendChild(addMois);


                          addMois.addEventListener("click", function(e){
                              var target = e.target.offsetTop;

                              $(function(){

                                  $(monthEdit).animate({

                                      top: target-20,
                                      //marginBottom: 30

                                    },{

                                      easing: 'easeOutBounce',
                                      duration: 1000

                                  })

                                  $("#close").click(function(e){

                                      var bottom = e.target.parentNode.offsetTop;


                                      $(monthEdit).animate({

                                      top: -bottom-100,
                                      //marginBottom: -320

                                    },{

                                      easing: 'easeInOutBounce',
                                      duration: 1000

                                  })

                                  })

                              })

                          })



                    })

                 </script>

            <?php


          }


     }





   }


 ?>
