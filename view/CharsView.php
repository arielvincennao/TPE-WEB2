<?php

include_once 'View.php';

class CharsView extends View{

  function EditChar($Title, $Char, $Roles){
    $this->smarty->assign('Title', $Title);
    $this->smarty->assign('Char',$Char);
    $this->smarty->assign('Roles',$Roles);

    $this->smarty->display('editchar.tpl');
  }


}

 ?>
