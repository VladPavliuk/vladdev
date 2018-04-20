<?php
/* Smarty version 3.1.31, created on 2017-04-01 22:57:26
  from "/home/vlad/Desktop/projects/odious_portfolio/app/views/default/contents/homePage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e01436164ce6_67954123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c29bac0abca7f804900b167b25d94efc9bb1ac30' => 
    array (
      0 => '/home/vlad/Desktop/projects/odious_portfolio/app/views/default/contents/homePage.tpl',
      1 => 1491080245,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e01436164ce6_67954123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157355698458e0143615eb31_49965944', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_74117758158e01436161eb1_92316385', "content");
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, '../layouts/main.tpl');
}
/* {block "title"} */
class Block_157355698458e0143615eb31_49965944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_157355698458e0143615eb31_49965944',
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
class Block_74117758158e01436161eb1_92316385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_74117758158e01436161eb1_92316385',
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
