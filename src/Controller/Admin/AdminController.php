<?php

namespace App\Controller\Admin;

use Laminas\Diactoros\Response;

class AdminController
{
    public function indexAction()
    {
        $response = new Response();

        $response->getBody()->write('<h1>You are the boss!</h1>');
        $response->getBody()->write('<a href="/">logout.</a>');

        return $response;
    }
}
