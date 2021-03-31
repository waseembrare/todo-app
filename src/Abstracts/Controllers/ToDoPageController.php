<?php


namespace App\Abstracts\Controllers;


use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class ToDoPageController
{
    protected $renderer;
    protected $toDoPageModel;

    public function __construct($renderer, $toDoPageModel)
    {
        $this->renderer = $renderer;
        $this->toDoPageModel = $toDoPageModel;
    }

    public function __invoke(Request $request, Response $response, array $args)
    {
        $allToDos = $this->toDoPageModel->getAllUsers();
        $data = ['allToDos' => $allToDos];
        return $this->renderer->render($response, "toDoPage.php", $data);
    }
}