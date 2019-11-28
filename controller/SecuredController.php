<?php

class SecuredController
{
  public $adminstatus;

  function __construct() {
    $this->adminstatus = $this->statusCheck(); //Checks user status 
  }

  function statusCheck() {
  session_start();
  if(isset($_SESSION['USER'])){
    if($_SESSION['USER'][1] == "admin"){
      return "admin"; //admin
    } else{
      return "member"; //member
    }
  }
  else {
    return "guest"; //guest
  }
 }

  function logout(){
    session_start();
    session_destroy();
    header(HOME);
  }

}

 ?>
