<?php
/* Smarty version 3.1.31, created on 2017-03-11 20:44:21
  from "/home/vlad/Desktop/projects/odious/app/views/default/layouts/main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58c45395154b79_55921360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '296a2939cb073fce4e28bad22ff3401b6acc5c85' => 
    array (
      0 => '/home/vlad/Desktop/projects/odious/app/views/default/layouts/main.tpl',
      1 => 1489261458,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
),false)) {
function content_58c45395154b79_55921360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, 'smarty_main.conf', null, 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103094956658c4539513ce08_12721967', "title");
?>
</title>

    <link rel="icon" type="image/x-icon" href="src/images/icon.jpg"/>

    <!-- BOOTSTRAP THEME -->
    <link rel="stylesheet"
          href="https://bootswatch.com/yeti/bootstrap.min.css">

    <!-- CDN STYLES-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" href="src/styles/app.css">
</head>
<body>

<!-- HEADER -->
<?php $_smarty_tpl->_subTemplateRender("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- CONTENT -->
<div class="container">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67239138058c4539514e0a0_97819758', "content");
?>

</div>

<!-- FOOTER -->
<?php $_smarty_tpl->_subTemplateRender("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<!-- CDN SCRIPTS -->
<?php echo '<script'; ?>

        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"><?php echo '</script'; ?>
>

<!-- CUSTOM SCRIPTS -->
    <?php echo '<script'; ?>
 src="src/scripts/app.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block "title"} */
class Block_103094956658c4539513ce08_12721967 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_103094956658c4539513ce08_12721967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Odious Framework<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_67239138058c4539514e0a0_97819758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_67239138058c4539514e0a0_97819758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Content<?php
}
}
/* {/block "content"} */
}
