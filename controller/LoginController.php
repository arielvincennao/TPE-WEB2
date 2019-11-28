<?php

require_once  "./model/LoginModel.php";
require_once "./view/HomeView.php";


class LoginController
{
  private $view;
  private $model_login;
  private $Title;

  function __construct()
  {
    $this->model_login = new LoginModel();
    $this->view = new HomeView();
    $this->Title = "League of Legends";
  }

  function Home(){
    $this->view->Render($this->Title);
  }
  function Register(){
    $this->view->Register('Registro de usuario');
  }
  function SignUp(){
    $usermail = $_POST["userEmail"];
    $password = $_POST["userPassword"];

    $dbEmail = $this->model_login->EmailCheck($usermail);
    if (isset($dbEmail) && $dbEmail['email'] == $usermail) {
      header(REGISTER);
    }
    else {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $newUser = $this->model_login->addUser($usermail, $hash);
      session_start();
      $_SESSION['USER'] = $newUser;
      header(PERSONAJES);
    }
  }

  function Logout(){
    session_start();
    session_destroy();
    header(HOME);
  }

  function Login(){
    $usermail = $_POST["userEmail"];
    $password = $_POST["userPassword"];
    $dbUser = $this->model_login->getUser($usermail);
      if(isset($dbUser)){
          if (password_verify($password, $dbUser['password'])){
            session_start();
            $_SESSION["USER"] = array($usermail, $dbUser['clearance']);
            header(PERSONAJES);
          }
          else{
            header(HOME);
          }
      }
      else{
        header(HOME);
      }
  }


}

 ?>
