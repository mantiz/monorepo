<?php

namespace Monorepo;

use Symfony\Component\HttpKernel\Exception;

class TestingMonorepoDependencies2
{
    function foo()
    {
        $kernel = new Exception\BadRequestHttpException('Test');
    }
}
