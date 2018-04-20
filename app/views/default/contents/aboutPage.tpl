{extends file='../layouts/main.tpl'}

{block name="title"}
    About page
{/block}

{block name="content"}
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
                        <a href="mailto:pavliuk.vlad@gmail.com" style="padding-left: 0" class="btn btn-link" target="_blank">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            pavliuk.vlad@gmail.com
                        </a>
                    </h4>
                    <h4>
                        <a href="https://github.com/VladPavliuk" style="padding-left: 0" class="btn btn-link"
                           target="_blank">
                            <i class="fa fa-github fa-lg" aria-hidden="true"></i>
                            github.com/VladPavliuk
                        </a>
                    </h4>
                    <h4 class="white">
                        <a href="https://www.linkedin.com/in/vlad-pavliuk-40654632/" style="padding-left: 0"
                           class="btn btn-link" target="_blank">
                            <i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i>
                            linkedin.com/in/vlad-pavliuk
                        </a>
                    </h4>
                </div>

            </div>
        </div>
    </header>
{/block}