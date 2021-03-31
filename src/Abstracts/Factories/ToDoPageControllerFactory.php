<?php


namespace App\Abstracts\Factories;


use App\Abstracts\Controllers\ToDoPageController;

class ToDoPageControllerFactory
{
    public function __invoke($container)
    {
        $renderer = $container->get('renderer');
        $toDoPageModel = $container->get('ToDoPageModel');
        $toDoPageController = new ToDoPageController($renderer, $toDoPageModel);
        return new $toDoPageController();
    }
}