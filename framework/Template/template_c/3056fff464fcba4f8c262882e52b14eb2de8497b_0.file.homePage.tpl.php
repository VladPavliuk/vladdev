<?php
/* Smarty version 3.1.31, created on 2017-04-06 23:07:50
  from "/var/www/vladdev/vladdev.com/app/views/default/contents/homePage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e6a016ce1c40_42710631',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3056fff464fcba4f8c262882e52b14eb2de8497b' => 
    array (
      0 => '/var/www/vladdev/vladdev.com/app/views/default/contents/homePage.tpl',
      1 => 1491509253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e6a016ce1c40_42710631 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13566130258e6a016cdb028_71862512', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157173605458e6a016cde7f1_13768873', "content");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../layouts/main.tpl');
}
/* {block "title"} */
class Block_13566130258e6a016cdb028_71862512 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13566130258e6a016cdb028_71862512',
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
class Block_157173605458e6a016cde7f1_13768873 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_157173605458e6a016cde7f1_13768873',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="intro">
        <div class="container">
            <div class="table">
                <div class="header-text">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="white typed">echo "Welcome to Vlad Pavliuk personal page.";</h2>
                            <span class="typed-cursor">|</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php
}
}
/* {/block "content"} */
}
