<?php


namespace App\Factories;


use App\Controllers\ToDoPageController;

class ToDoPageControllerFactory
{
    public function __invoke($container)
    {
        $renderer = $container->get('renderer');
        $toDoPageModel = $container->get('ToDoPageModel');
        return new ToDoPageController($renderer, $toDoPageModel);
    }
}