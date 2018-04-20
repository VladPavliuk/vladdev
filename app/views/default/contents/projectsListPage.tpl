{extends file='../layouts/main.tpl'}

{block name="title"}
    Projects list
{/block}

{block name="content"}
    <header id="intro">
        <div class="container">
            <div class="table">
                <div class="header-text">
                    <div class="row">
                        <div class="col-md-12 text-center">

                            <div style="margin-top:300px;"></div>

                            <div class="row intro-tables">
                                {foreach $projectsList as $project}
                                    <div class="col-md-6">
                                        <h3 class="light white">{$project["title"]}</h3>
                                        <a href="/project/{$project["id"]}" class="btn btn-blue">View details</a>
                                        <a href="{$project["link_to_site"]}" target="_blank">
                                            <div class="intro-table intro-table-first"
                                                 style="background-position: center center; background-image: url(/src/images/projects/{$project["image_title"]}); height: 500px;">
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
                                {/foreach}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
{/block}