<?php

class MainController extends Controller
{
    /**
     * Render home page.
     */
    public function homeAction()
    {
        $this->smarty->display("contents/homePage.tpl");
    }

    /**
     * Render projects list page.
     */
    public function projectsAction()
    {
        $projectsList = $this->mainModel->getProjectsList();

        $this->smarty->assign("projectsList", $projectsList);
        $this->smarty->display("contents/projectsListPage.tpl");
    }

    /**
     * Render single project page.
     *
     * @param $projectId
     */
    public function projectAction($projectId)
    {
        $project = $this->mainModel->getProject($projectId);

        $this->smarty->assign("project", $project);
        $this->smarty->display("contents/singleProjectPage.tpl");
    }

    /**
     * Render about list page.
     */
    public function aboutAction()
    {
        $this->smarty->display("contents/aboutPage.tpl");
    }
}