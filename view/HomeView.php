<?php

include_once 'View.php';

class HomeView extends View{

  function Render($Title){
    $this->smarty->assign('Title',$Title);
    $this->smarty->display('home.tpl');
  }
  function Register($Title){
    $this->smarty->assign('Title',$Title);
    $this->smarty->display('register.tpl');
  }
}

 ?>
