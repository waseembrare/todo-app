<?php


namespace App\Factories;


use App\Models\ToDoPageModel;
use Psr\Container\ContainerInterface;

class ToDoPageModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('PDO');
        return new ToDoPageModel($db);
    }
}