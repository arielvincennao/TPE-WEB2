<?php
/* Smarty version 3.1.33, created on 2019-10-29 04:45:06
  from 'C:\xampp\htdocs\TPE\templates\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5db7b5c2545ab0_82370066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5ec54f7777433d6462392bc2cabd9c818090e39' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE\\templates\\head.tpl',
      1 => 1572313973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5db7b5c2545ab0_82370066 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
  <head>
    <base href="http://<?php echo $_SERVER['SERVER_NAME'];
echo dirname($_SERVER['PHP_SELF']);?>
/" target="_self">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
    <link rel="shortcut icon" href="img/favicon.ico">
    <?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['Title']->value;?>
</title>
  </head>
  <body>
<?php }
}
