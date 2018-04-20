<?php

/**
 * Class Controller
 * Every controller should extends this class
 *
 */
class Controller
{
    protected $smarty = false;

    protected $mainModel = null;

    public function __construct()
    {
        $this->getSmarty();
        $this->defileModelsObjects();
    }

    private function defileModelsObjects()
    {
        $this->mainModel = new Main();
    }

    private function getSmarty()
    {
        // Smarty initialization
        $this->smarty = SmartyRun::connect();
    }
}