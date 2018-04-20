<?php
/* Smarty version 3.1.31, created on 2017-04-02 00:35:31
  from "/home/vlad/Desktop/projects/odious_portfolio/app/views/default/layouts/main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e02b331c2799_28649799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5605517ab99ceb96ca99f1ddc91fee4f4bab6d87' => 
    array (
      0 => '/home/vlad/Desktop/projects/odious_portfolio/app/views/default/layouts/main.tpl',
      1 => 1491086038,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_58e02b331c2799_28649799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'smarty_main.conf', null, 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134938898158e02b331b1153_15388389', "title");
?>
</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic"/>
    <meta name="keywords" content="html template, css, free, one page, gym, fitness, web design"/>
    <!-- Favicons (created with http://realfavicongenerator.net/)-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
    <link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicons/manifest.json">
    <link rel="shortcut icon" href="img/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a8ff">
    <meta name="msapplication-config" content="img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Normalize -->
    <link rel="stylesheet" type="text/css" href="/src/styles/normalize.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="/src/styles/bootstrap.css">
    <!-- Owl -->
    <link rel="stylesheet" type="text/css" href="/src/styles/owl.css">
    <!-- Animstyles.css -->
    <link rel="stylesheet" type="text/css" href="/src/styles/animate.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="/src/fonts/font-awesome-4.1.0/css/font-awesome.min.css">
    <!-- Elegant Icons -->
    <link rel="stylesheet" type="text/css" href="/src/fonts/eleganticons/et-icons.css">
    <!-- Main style -->
    <link rel="stylesheet" type="text/css" href="/src/styles/cardio.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="/src/styles/app.css">
</head>
<style>
    body {
        background-color: #403D72;
    }
</style>
<body>
<div class="preloader">
    <img src="/src/images/loader.gif" alt="Preloader image">
</div>
<!-- HEADER -->
<?php $_smarty_tpl->_subTemplateRender("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- CONTENT -->
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82874507258e02b331bb842_17253282', "content");
?>



<!-- FOOTER -->
<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- Libraries scripts -->
<?php echo '<script'; ?>
 src="/src/scripts/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/scripts/owl.carousel.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/scripts/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/scripts/wow.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/scripts/typewriter.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/scripts/jquery.onepagenav.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/src/scripts/main.js"><?php echo '</script'; ?>
>

<!-- CUSTOM SCRIPTS -->
    <?php echo '<script'; ?>
 src="/src/scripts/app.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block "title"} */
class Block_134938898158e02b331b1153_15388389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_134938898158e02b331b1153_15388389',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Odious Framework<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_82874507258e02b331bb842_17253282 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_82874507258e02b331bb842_17253282',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Content<?php
}
}
/* {/block "content"} */
}
