<?php

trait MainModelInteract
{
    protected function getAllItems($limitOfItems)
    {
        return $this->mainModelObject->getAllItems($limitOfItems);
    }

    protected function getSingleItem($id)
    {
        return $this->mainModelObject->getSingleItem($id);
    }
}