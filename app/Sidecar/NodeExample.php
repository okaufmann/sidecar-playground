<?php

namespace App\Sidecar;

use Hammerstone\Sidecar\LambdaFunction;
use Hammerstone\Sidecar\Runtime;

class NodeExample extends LambdaFunction
{
    public function handler()
    {
        return 'sidecar/example@handler';
    }

    public function runtime()
    {
        return Runtime::NODEJS_14;
    }

    public function package()
    {
        return [
            'sidecar/example.js',
        ];
    }
}
