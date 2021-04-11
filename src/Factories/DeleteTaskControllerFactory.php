<?php


namespace App\Factories;


use App\Controllers\DeleteTaskController;

class DeleteTaskControllerFactory
{
    public function __invoke($container)
    {
        $renderer = $container->get('renderer');
        $toDoPageModel = $container->get('ToDoPageModel');
        return new DeleteTaskController($renderer, $toDoPageModel);
    }

}