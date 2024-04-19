<?php

namespace Kish;

use Kish\Http\Message\Response\{ResponseInterface, Response};
use Kish\Http\Message\Request\{RequestInterface, Request};

class Kernel
{
    public function __construct()
    {
        echo "Kernel, got elevel herbs and spices\n";
    }

    public function handle(RequestInterface $request): ResponseInterface
    {
        return new Response("Kernel, handling request\n");
    }
}
