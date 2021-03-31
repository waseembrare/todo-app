<?php


namespace App\Abstracts\Factories;


use App\Abstracts\Models\ToDoPageModel;
use Psr\Container\ContainerInterface;

class ToDoPageModelFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $db = $container->get('PDO');
        return new ToDoPageModel($db);
    }
}