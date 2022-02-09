<?php

namespace App\Sidecar;

use Hammerstone\Sidecar\LambdaFunction;
use Hammerstone\Sidecar\Runtime;

class PythonExample extends LambdaFunction
{
    public function handler()
    {
        return 'sidecar/example@handler';
    }

    public function runtime()
    {
        return Runtime::PYTHON_39;
    }

    public function package()
    {
        return [
            'sidecar/example.py',
        ];
    }
}
