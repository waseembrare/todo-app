<?php


namespace App\Factories;


use App\Controllers\UndoMarkTaskCompletedController;

class UndoMarkTaskCompletedControllerFactory
{
    public function __invoke($container)
    {
        $renderer = $container->get('renderer');
        $toDoPageModel = $container->get('ToDoPageModel');
        return new UndoMarkTaskCompletedController($renderer, $toDoPageModel);
    }
}