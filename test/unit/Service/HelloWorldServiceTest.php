<?php

namespace App\Service;

use Helpers\ProjectTestCase;

class HelloWorldServiceTest extends ProjectTestCase
{
    public function testReturnHelloWorld()
    {
        $service = new HelloWorldService();

        $this->assertEquals('Hello World!', $service->returnHelloWorld());
    }
}
