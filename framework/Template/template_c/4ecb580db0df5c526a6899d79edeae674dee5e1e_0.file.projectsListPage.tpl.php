<?php
/* Smarty version 3.1.31, created on 2017-04-03 20:06:24
  from "/home/vlad/Desktop/projects/odious_portfolio/app/views/default/contents/projectsListPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e28f20807741_34860496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ecb580db0df5c526a6899d79edeae674dee5e1e' => 
    array (
      0 => '/home/vlad/Desktop/projects/odious_portfolio/app/views/default/contents/projectsListPage.tpl',
      1 => 1491242784,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e28f20807741_34860496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56187236858e28f207ee8d9_09515582', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197350530958e28f207f21d2_36066479', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../layouts/main.tpl');
}
/* {block "title"} */
class Block_56187236858e28f207ee8d9_09515582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_56187236858e28f207ee8d9_09515582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    About page!
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_197350530958e28f207f21d2_36066479 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_197350530958e28f207f21d2_36066479',
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

                            <div style="margin-top:300px;"></div>

                            <div class="row intro-tables">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projectsList']->value, 'project');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
                                    <div class="col-md-6">
                                        <h3 class="light white"><?php echo $_smarty_tpl->tpl_vars['project']->value["title"];?>
</h3>
                                        <a href="/project/<?php echo $_smarty_tpl->tpl_vars['project']->value["id"];?>
" class="btn btn-blue">View details</a>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['project']->value["link_to_site"];?>
" target="_blank">
                                            <div class="intro-table intro-table-first"
                                                 style="background-position: center center; background-image: url(/src/images/projects/<?php echo $_smarty_tpl->tpl_vars['project']->value["image_title"];?>
); height: 500px;">
                                                <div class="owl-carousel owl-schedule bottom">
                                                    <div class="item">
                                                        <div class="schedule-row row">
                                                            <div class="col-xs-6">

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

                            </div>
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
