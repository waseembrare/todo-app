<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    // the function gets replaced by DI key
//    $app->get('/', function ($request, $response, $args) use ($container) {
//        $renderer = $container->get('renderer');
//        return $renderer->render($response, "toDoPage.php", $args);
//    });

    $app->get('/', 'ToDoPageController');

//    $app->get('/todo', 'ToDoPageController');

    $app->post('/create', 'CreateTaskController');

    $app->get('/deleted/{id}', 'DeleteTaskController');

    $app->get('/completed/{id}', 'MarkTaskCompletedController');

    $app->get('/undo/{id}', 'UndoMarkTaskCompletedController');
};
