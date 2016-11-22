
<?php

     class welcom extends controller{

       public function __construct(){

        parent::__construct();

       }

        public function home(){

             $home_page = $this->vieuw('vieuw');
             $home_page->vieuwChild_path('home');

        }

         public function leader_home(){

             //$this->session_checked($this->vieuw('vieuw')->render('private_home/leader_home'));
             $this->vieuw('vieuw')->render('sessions/leader_home');

         }

         public function leader_assistant_home(){

             $this->vieuw('vieuw')->render('private_home/leader-assistant_home');

         }

         public function member_home(){

             $this->vieuw('vieuw')->render('private_home/member_home');

         }

         public function signout(){

           $this->vieuw("vieuw")->render("private_home/signout");
         }

         public function CellMeeting_report(){


            $this->vieuw('vieuw')->render('sessions/cm_report');


         }

         public function report(){


            $this->vieuw('vieuw')->render('sessions/report');


         }

         public function week(){


            $this->vieuw('vieuw')->render('sessions/week');


         }



     }
 ?>
