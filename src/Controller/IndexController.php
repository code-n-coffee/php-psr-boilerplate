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

    public function indexAction(ServerRequestInterface $request) : Response
    {
        $response = new Response();

        if (isset($request->getQueryParams()['denied'])) {
            $response->getBody()->write('<p>
                The auth middleware denied you! You have been redirected back. 
                Try with authentication: <a href="/admin?authenticated">\'/admin?authenticated\'</a>
             </p>');
        }

        $response->getBody()->write('<h1>' . $this->service->returnHelloWorld() . '</h1>');
        $response->getBody()->write('<br><a href="/admin">\'/admin\'</a>');

        return $response;
    }
}
