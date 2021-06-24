<?php

namespace App\Controller;

use App\Service\HelloWorldService;
use Laminas\Diactoros\Response;
use Psr\Http\Message\ServerRequestInterface;

class IndexController
{
    /**
     * @var \App\Service\HelloWorldService
     */
    private HelloWorldService $service;

    public function __construct(HelloWorldService $service)
    {
        $this->service = $service;
    }

    public function indexAction() : Response
    {
        $response = new Response();

        $response->getBody()->write('<h1>' . $this->service->returnHelloWorld() . '</h1>');

        return $response;
    }

    public function catchAllAction(ServerRequestInterface $request) : Response
    {
        dd($request);
    }
}
