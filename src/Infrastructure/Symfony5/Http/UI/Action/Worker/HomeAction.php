<?php

declare(strict_types=1);

namespace Symfony5\Http\UI\Action\Worker;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

final class HomeAction
{
    public function __invoke(Request $request): Response
    {
        return new Response('OK', Response::HTTP_OK);
    }
}
