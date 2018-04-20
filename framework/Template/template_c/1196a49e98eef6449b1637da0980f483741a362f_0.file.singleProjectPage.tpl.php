<?php
/* Smarty version 3.1.31, created on 2017-04-03 20:15:43
  from "/home/vlad/Desktop/projects/odious_portfolio/app/views/default/contents/singleProjectPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e2914f687405_18372027',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1196a49e98eef6449b1637da0980f483741a362f' => 
    array (
      0 => '/home/vlad/Desktop/projects/odious_portfolio/app/views/default/contents/singleProjectPage.tpl',
      1 => 1491243343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e2914f687405_18372027 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106392947458e2914f6637b5_03695888', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layouts/main.tpl");
}
/* {block "content"} */
class Block_106392947458e2914f6637b5_03695888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_106392947458e2914f6637b5_03695888',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="intro">
        <div class="container">
            <div class="row" style="margin-top: 200px;">

                <div class="col-sm-6 text-center-mobile">
                    <h3 class="white"><?php echo $_smarty_tpl->tpl_vars['project']->value["title"];?>
 <span class="open-blink"></span></h3>
                    <div class="row opening-hours">
                        <div class="col-sm-10 text-center-mobile">
                            <a href="<?php echo $_smarty_tpl->tpl_vars['project']->value["link_to_site"];?>
" target="_blank">
                                <img class="img-responsive"
                                     src="/src/images/projects/<?php echo $_smarty_tpl->tpl_vars['project']->value["image_title"];?>
"
                                     alt="<?php echo $_smarty_tpl->tpl_vars['project']->value["title"];?>
"
                                     title="<?php echo $_smarty_tpl->tpl_vars['project']->value["title"];?>
">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-center-mobile">
                    <h3 class="white">Description</h3>

                    <h5 class="light regular light-white"><?php echo $_smarty_tpl->tpl_vars['project']->value["description"];?>
</h5>

                    <h4 class="white">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['project']->value["link_to_site"];?>
"
                           class="btn btn-blue-fill" target="_blank">
                           link to site.
                        </a>
                    </h4>
                </div>

            </div>
        </div>
    </header>
<?php
}
}
/* {/block "content"} */
}
