<?php

include_once 'View.php';

class ItemsView extends View{

  function EditItem($Title, $Item){
    $this->smarty->assign('Title', $Title);
    $this->smarty->assign('Item',$Item);

    $this->smarty->display('edititem.tpl');
  }
}

 ?>
