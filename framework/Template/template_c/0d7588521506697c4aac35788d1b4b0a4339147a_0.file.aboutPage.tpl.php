<?php
/* Smarty version 3.1.31, created on 2017-04-02 22:19:38
  from "/home/vlad/Desktop/projects/odious_portfolio/app/views/default/contents/aboutPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_58e15cda0d8480_35369169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d7588521506697c4aac35788d1b4b0a4339147a' => 
    array (
      0 => '/home/vlad/Desktop/projects/odious_portfolio/app/views/default/contents/aboutPage.tpl',
      1 => 1491164377,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58e15cda0d8480_35369169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114833100158e15cda0c6440_98411852', "title");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_149558365758e15cda0cbeb5_22164907', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, '../layouts/main.tpl');
}
/* {block "title"} */
class Block_114833100158e15cda0c6440_98411852 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_114833100158e15cda0c6440_98411852',
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
class Block_149558365758e15cda0cbeb5_22164907 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_149558365758e15cda0cbeb5_22164907',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<header id="intro">
    <div class="container">
        <div class="row" style="margin-top: 200px;">

            <div class="col-sm-6 text-center-mobile">
                <h3 class="white">List of uses technology <span class="open-blink"></span></h3>
                <div class="row opening-hours">
                    <div class="col-sm-12 text-center-mobile">
                        <h5 class="light-white light">Front-end experience.</h5>
                        <h3>
                            <span class="regular white label label-success">
                                HTML5
                            </span>
                        </h3>
                        <h3>
                            <span class="regular white label label-success">
                                 CSS3 (Bootstrap, Foundation)
                            </span>
                        </h3>
                        <h3>
                            <span class="regular white label label-success">
                                JS (jQuery, AJAX)
                            </span>
                        </h3>
                    </div>
                    <div class="col-sm-12 text-center-mobile">
                        <h5 class="light-white light">Back-end experience.</h5>
                        <h3>
                            <span class="regular white label label-primary">
                                PHP 5 (Symfony 3, Laravel 5, Composer)
                            </span>
                        </h3>
                        <h3>
                            <span class="regular white label label-primary">
                               Smarty 3, Twig, Blade
                            </span>
                        </h3>
                        <h3>
                            <span class="regular white label label-primary">
                                 SQL (mySQL, PDO)
                            </span>
                        </h3>
                        <h3>
                            <span class="regular white label label-primary">
                                Git (Git Hub)
                            </span>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center-mobile">
                <h3 class="white">Contact info</h3>

                <img src="/src/images/portfolio_image.jpg" alt="" height="128">
                <h5 class="light regular light-white">List of my profiles on different services.</h5>
                <h4>
                    <a href="" style="padding-left: 0" class="btn btn-link" target="_blank">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        pavliuk.vlad@gmail.com
                    </a>
                </h4>
                <h4>
                    <a href="https://github.com/VladPavliuk" style="padding-left: 0" class="btn btn-link" target="_blank">
                        <i class="fa fa-github fa-lg" aria-hidden="true"></i>
                        github.com/VladPavliuk
                    </a>
                </h4>
                <h4 class="white">
                    <a href="https://www.linkedin.com/in/vlad-pavliuk-40654632/" style="padding-left: 0" class="btn btn-link" target="_blank">
                        <i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i>
                        linkedin.com/in/vlad-pavliuk
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
