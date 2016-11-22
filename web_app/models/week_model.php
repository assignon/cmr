<?php

require '../web_app/core/model.php';
class week_model extends model
{

  public function __construct(){

     parent::__construct();

  }

  
  public function get_users_data($where,$id,$table_name){

     $req = $this->prepare_fetch("SELECT*FROM $table_name WHERE $where=?",[$id]);
     return $req;


  }

}

 ?>
