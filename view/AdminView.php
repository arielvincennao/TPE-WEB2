<?php


include_once 'View.php';

class AdminView extends View{

  function Render($Title, $Chars, $Roles, $Users){
      $this->smarty->assign('Title',$Title);
      $this->smarty->assign('Chars',$Chars);
      $this->smarty->assign('Roles',$Roles);
      $this->smarty->assign('Users',$Users);

      $this->smarty->display('dashboard.tpl');
    }

}

 ?>
