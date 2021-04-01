<?php


namespace App\Models;


use PDO;

class ToDoPageModel
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getAllTasks()
    {
        $query = $this->db->prepare('SELECT * FROM `tasks` WHERE `deleted` IS NULL');
        $query->execute();
        return $query->fetchAll();
    }

    public function createNewTask($newTask)
    {
        $query = $this->db->prepare('INSERT INTO `tasks` (`task`) VALUES (:task)');
        return $query->execute($newTask);
    }

    public function deleteTask($id)
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `deleted` = 1 WHERE `id` = :id;');
        return $query->execute($id);
    }

    public function markTaskCompleted($id)
    {
        $query = $this->db->prepare('UPDATE `tasks` SET `completed` = 1 WHERE `id` = :id;');
        return $query->execute($id);
    }

}