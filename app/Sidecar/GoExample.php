<?php

namespace App\Sidecar;

use Hammerstone\Sidecar\LambdaFunction;
use Hammerstone\Sidecar\Runtime;

class GoExample extends LambdaFunction
{
    public function handler()
    {
        return 'sidecar/go/example';
    }

    public function runtime()
    {
        return Runtime::GO_1X;
    }

    public function package()
    {
        return [
            'sidecar/go/example',
        ];
    }
}
