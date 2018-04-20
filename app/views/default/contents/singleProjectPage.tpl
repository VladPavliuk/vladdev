{extends file="../layouts/main.tpl"}

{block name="title"}
    Project page
{/block}

{block name="content"}
    <header id="intro">
        <div class="container">
            <div class="row" style="margin-top: 200px;">

                <div class="col-sm-6 text-center-mobile">
                    <h3 class="white">{$project["title"]} <span class="open-blink"></span></h3>
                    <div class="row opening-hours">
                        <div class="col-sm-10 text-center-mobile">
                            <a href="{$project["link_to_site"]}" target="_blank">
                                <img class="img-responsive"
                                     src="/src/images/projects/{$project["image_title"]}"
                                     alt="{$project["title"]}"
                                     title="{$project["title"]}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 text-center-mobile">
                    <a href="/projects">back to list page</a>
                    {if strlen($project["other_developers_list"]) > 0}
                        <h3 class="white">
                            Front-end by: <a href="{$project["other_developers_list"]}" target="_blank">Bogdan
                                Glibovutskuy</a>
                        </h3>
                        <br>
                    {/if}
                    <h3 class="white">Description</h3>

                    <h5 class="light regular light-white">{$project["description"]}</h5>

                    <h4 class="white">
                        <a href="{$project["link_to_site"]}"
                           class="btn btn-blue-fill" target="_blank">
                            link to project
                        </a>
                    </h4>
                </div>

            </div>
        </div>
    </header>
{/block}