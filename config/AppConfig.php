<?php


define('HOME',"Location: http://".$_SERVER["SERVER_NAME"] . ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]));
define('DASHBOARD',"Location: http://".$_SERVER["SERVER_NAME"] . ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]) ."/dashboard");
define('LOGOUT',"Location: http://".$_SERVER["SERVER_NAME"] . ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]) ."/logout");
define('USUARIOS',"Location: http://".$_SERVER["SERVER_NAME"] . ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]) ."/usuarios");
define('REGISTER',"Location: http://".$_SERVER["SERVER_NAME"] . ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]) ."/register");
define('LOGIN',"Location: http://".$_SERVER["SERVER_NAME"] . ":". $_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]) ."/login");

class AppConfig {
  public static $ACTION = 'action';
  public static $PARAMS = 'params';
  public static $ACTIONS = [
    '' => 'LoginController#Home',
    'home'=> 'LoginController#Home',
    'register'=> 'LoginController#Register',
    'signup'=> 'LoginController#SignUp',
    'adminuser'=> 'UsersController#AdminUser',
    'regularuser'=> 'UsersController#RegularUser',
    'deleteuser'=> 'UsersController#DeleteUser',

    'usuarios'=> 'PublicController#GetChars',
    'deletechar'=> 'CharsController#DeleteChar',
    'editchar'=> 'CharsController#EditChar',
    'insertchar'=> 'CharsController#InsertChar',
    'savechar'=> 'CharsController#SaveEditChar',
    'charsbyrole'=> 'PublicController#GetCharsByRole',
    'detail'=> 'PublicController#GetChar',
    'filter'=> 'PublicController#Filter',

    'roles'=> 'PublicController#GetRoles',
    'deleterole'=> 'RolesController#DeleteRole',
    'editrole'=> 'RolesController#EditRole',
    'insertrole'=> 'RolesController#InsertRole',
    'saverole'=> 'RolesController#SaveEditRole',

    'dashboard'=> 'AdminController#Dashboard',
    'login'=> 'LoginController#Login',
    'logout'=> 'LoginController#Logout',

    'agregarimagen' => 'PublicController#UploadImage',
    'borrarimagen' => 'PublicController#DeleteImage'

  ];
}


 ?>
