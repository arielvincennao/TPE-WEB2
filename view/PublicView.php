<?php

include_once 'View.php';

class PublicView extends View{

  function GetChars($Title, $Chars, $Roles){
    $this->smarty->assign('Title',$Title);
    $this->smarty->assign('Chars',$Chars);
    $this->smarty->assign('Roles',$Roles);

    $this->smarty->display('chars.tpl');
  }

  function DetailsChar($Title, $Char, $Roles, $status, $Images){
    $this->smarty->assign('Title', "Detalles de " .$Char[0]['name']);
    $this->smarty->assign('Char',$Char);
    $this->smarty->assign('Roles',$Roles);
    $this->smarty->assign('status',$status);
    $this->smarty->assign('Images',$Images);

    $this->smarty->display('detailschar.tpl');
  }
  function GetRoles($Title, $Roles){
    $this->smarty->assign('Title',$Title);
    $this->smarty->assign('Roles',$Roles);

    $this->smarty->display('roles.tpl');
  }
  function GetItems($Title, $Items){
    $this->smarty->assign('Title',$Title);
    $this->smarty->assign('Items',$Items);

    $this->smarty->display('items.tpl');
  }
  function GetCharsByRole($Title, $Chars, $Roles){
    $this->smarty->assign('Title',$Title);
    $this->smarty->assign('Chars',$Chars);
    $this->smarty->assign('Roles',$Roles);

    $this->smarty->display('charsbyrole.tpl');
  }
}


 ?>
