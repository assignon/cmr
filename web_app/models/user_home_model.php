<?php

      require "../web_app/core/model.php";
       class user_home_model extends model{

       public function __construct(){

          //user_controle_acces('id')
           parent::__construct();

       }

       public function get_users_data($id,$table_name){

          $req = $this->prepare_fetch("SELECT*FROM $table_name WHERE id=?",[$id]);
          return $req;


       }

           public function insert_users_data($table_name,$values1,$values2){

               $req = $this->prepare("INSERT INTO $table_name(year_name, year_theme) VALUES(?,?)",[$values1,$values2]);
               return $req;

           }

           public function select_users_data($table_name){

               $req = $this->query("SELECT*FROM $table_name ORDER BY year_name DESC");
               return $req;

           }


           public function pdo(){

               return $this->getPDO();
           }


           public function error($error){

               ?>

                 <script type="text/javascript">

                     var error = document.getElementById("error");
                     error.innerHTML = "<?php echo $error; ?>";

                  </script>

               <?php


           }


}


?>
