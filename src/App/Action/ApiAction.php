<?php

namespace App\Action;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\TextResponse;

class ApiAction
{
    private $versions;

    public function __construct($versions)
    {
        $this->versions = $versions;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, callable $next = null)
    {
        $version = $request->getQueryParams()['v'] ?? '1';
        if (! isset($this->versions[$version])) {
            $version = '1';
        }

        return new TextResponse($this->versions[$version]);
    }
}
