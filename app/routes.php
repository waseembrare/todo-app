<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', 'ToDoPageController');
    $app->post('/create', 'CreateTaskController');
    $app->get('/deleted/{id}', 'DeleteTaskController');
    $app->get('/completed/{id}', 'MarkTaskCompletedController');
    $app->get('/undo/{id}', 'UndoMarkTaskCompletedController');
};
