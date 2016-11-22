<?php

    class model{

        private $pdo;

       public function __construct(){



       }


        public function model_require($model_require){

          require "../web_app/models/".$model_require.".php";

       }

       public function getPOST($post){

        if(isset($_POST[$post]) AND !empty($_POST[$post])){

            return $_POST[$post];
        }

       }

       public function getPDO(){

         if( $this->pdo === null){

             $this->pdo= new PDO("mysql:host=localhost;dbname=cmr",'root','');
             $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

         }

         return  $this->pdo;
       }

       public function POST($post){

         if(isset($_POST[$post])){

           $getPOST = $_POST[$post];
           return $getPOST;           
         }

       }


       protected function error($error){
         ?>

         <script type="text/javascript">

         var error = document.getElementById("error");
         error.innerHTML = "<?php echo $error ?>";
         error.style.color = "crimson";

         </script>
       <?php

       }

       protected function errors($error){
         ?>

         <script type="text/javascript">

         var error = document.querySelector(".error");
         error.innerHTML = "<?php echo $error ?>";
         error.style.color = "crimson";

         </script>
       <?php

       }

       public function signin_err($userErr){

         ?>

         <script type="text/javascript">

         var errors = document.getElementById("signIn_error");
         errors.innerHTML = "<?php echo $userErr ?>";
         errors.style.left = "50px";

         </script>
       <?php

       }

       protected function query($statement)
       {

         $query_request = $this->getPDO()->query($statement);
         return $query_request;


       }

   protected function prepare_fetch($statement,$data_array)
       {

           $request = $this->getPDO()->prepare($statement);
           $request->execute($data_array);
           $data = $request->fetch();
           return $data;


       }

       protected function prepare($statement,$data_array){

         $prepare_request = $this->getPDO()->prepare($statement);
         $prepare_request->execute($data_array);
           return $prepare_request;


       }

    }

 ?>
