<?php
/* Smarty version 3.1.31, created on 2017-04-06 23:10:04
  from "/var/www/vladdev/vladdev.com/app/views/default/contents/singleProjectPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e6a09c3fb7b5_62975345',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ff398248ec541863831a4e1333063950d742d6d' => 
    array (
      0 => '/var/www/vladdev/vladdev.com/app/views/default/contents/singleProjectPage.tpl',
      1 => 1491509253,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e6a09c3fb7b5_62975345 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73061980458e6a09c3d67c4_22555692', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_126714994458e6a09c3da059_50758836', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../layouts/main.tpl");
}
/* {block "title"} */
class Block_73061980458e6a09c3d67c4_22555692 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_73061980458e6a09c3d67c4_22555692',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Project page
<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_126714994458e6a09c3da059_50758836 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_126714994458e6a09c3da059_50758836',
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
                    <a href="/projects">back to list page</a>
                    <?php if (strlen($_smarty_tpl->tpl_vars['project']->value["other_developers_list"]) > 0) {?>
                        <h3 class="white">
                            Front-end by: <a href="<?php echo $_smarty_tpl->tpl_vars['project']->value["other_developers_list"];?>
" target="_blank">Bogdan
                                Glibovutskuy</a>
                        </h3>
                        <br>
                    <?php }?>
                    <h3 class="white">Description</h3>

                    <h5 class="light regular light-white"><?php echo $_smarty_tpl->tpl_vars['project']->value["description"];?>
</h5>

                    <h4 class="white">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['project']->value["link_to_site"];?>
"
                           class="btn btn-blue-fill" target="_blank">
                            link to project
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
