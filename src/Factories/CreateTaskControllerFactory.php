<?php


namespace App\Factories;


use App\Controllers\CreateTaskController;

class CreateTaskControllerFactory
{
    public function __invoke($container)
    {
        $renderer = $container->get('renderer');
        $toDoPageModel = $container->get('ToDoPageModel');
        return new CreateTaskController($renderer, $toDoPageModel);
    }
}