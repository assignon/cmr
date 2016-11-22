<?php

    class vieuw{

       public function __construct(){

       }

       public function vieuw($vieuw){

           return new $vieuw;

       }

       public function vieuwChild_path($child_path){

          require '../web_app/vieuws/'.$child_path.'.php';

       }

       public function vieuwChild_instance($child_instance){

         return new $child_instance;

       }

        public function render($page){

            require '../web_app/vieuws/'.$page.'.php';

        }

        public function renderPrivate($page){

            require '../web_app/vieuws/'.$page.'?id='.$_SESSION['id'].'.php';

        }


    }

 ?>
