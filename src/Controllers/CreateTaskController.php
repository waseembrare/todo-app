<?php


namespace App\Controllers;


use App\Abstracts\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CreateTaskController extends Controller
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
        $postData = $request->getParsedBody();
        $this->toDoPageModel->createNewTask($postData['task-text']);
        return $response->withHeader('Location', '/');
    }
}