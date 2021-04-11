<?php


namespace App\Factories;


use App\Controllers\MarkTaskCompletedController;

class MarkTaskCompletedControllerFactory
{
    public function __invoke($container)
    {
        $renderer = $container->get('renderer');
        $toDoPageModel = $container->get('ToDoPageModel');
        return new MarkTaskCompletedController($renderer, $toDoPageModel);
    }
}