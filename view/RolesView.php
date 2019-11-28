<?php

include_once 'View.php';

class RolesView extends View{

  function EditRole($Title, $Role){
    $this->smarty->assign('Title', $Title);
    $this->smarty->assign('Role',$Role);

    $this->smarty->display('editrole.tpl');
  }
}

 ?>
