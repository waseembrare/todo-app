<?php


namespace App\Abstracts\Factories;


use App\Abstracts\Models\ToDoModel;
use App\Models\UserModel;
use Psr\Container\ContainerInterface;

class ToDoModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('PDO');
        return new ToDoModel($db);
    }
}