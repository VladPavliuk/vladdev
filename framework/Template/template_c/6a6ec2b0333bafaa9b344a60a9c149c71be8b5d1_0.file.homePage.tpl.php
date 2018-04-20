<?php
/* Smarty version 3.1.31, created on 2017-04-01 19:52:18
  from "/home/vlad/Desktop/projects/odious/app/views/default/contents/homePage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58dfe8d283f457_48814983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a6ec2b0333bafaa9b344a60a9c149c71be8b5d1' => 
    array (
      0 => '/home/vlad/Desktop/projects/odious/app/views/default/contents/homePage.tpl',
      1 => 1491069138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58dfe8d283f457_48814983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165177154158dfe8d2835736_93595377', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137230884358dfe8d2838d07_47942922', "content");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../layouts/main.tpl');
}
/* {block "title"} */
class Block_165177154158dfe8d2835736_93595377 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_165177154158dfe8d2835736_93595377',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Welcome page!
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_137230884358dfe8d2838d07_47942922 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_137230884358dfe8d2838d07_47942922',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <h1 align="center">Welcome to <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'frameworkVersion');?>
!</h1>

        <h3 align="center">
           It's simple PHP MVC+ framework .
        </h3>
        <h4 align="center"><a href="https://github.com/VladPavliuk/Odious">Documentation on GitHub</a></h4>
    </div>
<?php
}
}
/* {/block "content"} */
}
