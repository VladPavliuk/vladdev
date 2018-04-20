<?php

class Main extends Model
{

    /**
     * Return projects list.
     *
     * @return array
     */
    public function getProjectsList()
    {
        $queryResult = $this->dataBase->query("SELECT * FROM `project`");
        return $queryResult->fetchAll();
    }

    /**
     * Return single project.
     *
     * @param $projectId
     * @return mixed
     */
    public function getProject($projectId)
    {
        $queryResult = $this->dataBase->query("SELECT * FROM `project` WHERE `id` = {$projectId}");
        return $queryResult->fetch();
    }

    /**
     * Return all items
     *
     * @param $limitOfItems
     * @return array
     */
    public function getAllItems($limitOfItems)
    {
        $limitOfItems = $limitOfItems > 10 ? 10 : $limitOfItems;

        $queryResult = $this->dataBase->query("SELECT * FROM `users` LIMIT {$limitOfItems}");

        $itemsList = [];
        $i = 1;
        while($row = $queryResult->fetch()) {
            $itemsList[$i++] = $row;
        }

        return $itemsList;
    }

    /**
     * Return single item
     *
     * @param $id
     * @return mixed
     */
    public function getSingleItem($id)
    {
        $id = intval($id);

        $queryResult = $this->dataBase->query("SELECT * FROM `users` WHERE `id`={$id}");

        $singleItem = $queryResult->fetch();

        return $singleItem;
    }
}