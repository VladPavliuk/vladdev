<?php
/* Smarty version 3.1.31, created on 2017-04-06 23:07:47
  from "/var/www/vladdev/vladdev.com/app/views/default/contents/projectsListPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e6a0132e16a9_22328313',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fb94f0d03f299670e409682a5d3f50e38efcaff' => 
    array (
      0 => '/var/www/vladdev/vladdev.com/app/views/default/contents/projectsListPage.tpl',
      1 => 1491509253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e6a0132e16a9_22328313 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103994994458e6a0132c3913_63383473', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_210927674858e6a0132c72a3_37266988', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../layouts/main.tpl');
}
/* {block "title"} */
class Block_103994994458e6a0132c3913_63383473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_103994994458e6a0132c3913_63383473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Projects list
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_210927674858e6a0132c72a3_37266988 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_210927674858e6a0132c72a3_37266988',
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
