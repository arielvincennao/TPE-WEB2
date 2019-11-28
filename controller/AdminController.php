<?php

require_once  "./view/AdminView.php";
require_once  "./model/CharsModel.php";
require_once  "./model/RolesModel.php";
require_once  "./model/UsersModel.php";
require_once "SecuredController.php";

class AdminController extends SecuredController{
  private $view;
  private $model_chars;
  private $model_roles;
  private $model_users;
  private $Title;

  function __construct()
  {
    parent::__construct();
    $this->view = new AdminView();
    $this->model_chars = new CharsModel();
    $this->model_roles = new RolesModel();
    $this->model_users = new UsersModel();
    $this->Title = "DASHBOARD";
  }


  function Dashboard(){
    if($this->adminstatus === "admin") {
      $Chars = $this->model_chars->GetChars();
      $Roles = $this->model_roles->GetRoles();
      $Users = $this->model_users->GetUsers();
    }
    else {
      header(HOME);
    }

    $this->view->Render($this->Title, $Chars, $Roles, $Users);
  }


}

 ?>
