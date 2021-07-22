<?php

namespace App\Controllers;

use App\View;
use App\Views\TableRender;
use App\Views\ListRender;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{
    public function home(Request $request, Response $response, $args): Response
    {
        $page = View::render('app.php',
        [
            'body' => 
            [
                $this->tableTemplate(),
                $this->listTemplate()
            ], 
            'title' => 'My first web'
        ]);
        $response->getBody()->write($page);
        return $response;
    }

    public function tableTemplate(): string
    {
        $table = new TableRender();
        $table->set([
            [
                'Name' => 'Joe',
                'Email' => 'joe@test.local',
                'Age' => 15
            ],
            [
                'Name' => 'Allen',
                'Email' => 'allen@test.local',
                'Age' => 32
            ],
        ]);
        return $table->render();
    }

    public function listTemplate(): string
    {
        $list = new ListRender();
        $list->set([
            'Name',
            'Email',
            'Age'
        ]);
        return $list->render();
    }
}