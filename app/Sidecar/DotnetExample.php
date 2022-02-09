<?php

namespace App\Sidecar;

use Hammerstone\Sidecar\LambdaFunction;
use Hammerstone\Sidecar\Package;
use Hammerstone\Sidecar\Runtime;

class DotnetExample extends LambdaFunction
{
    public function handler()
    {
        return 'dotnet::dotnet.Function::FunctionHandler';
    }

    public function runtime()
    {
        return Runtime::DOT_NET_31;
    }

    public function package()
    {
        return Package::make()
            ->setBasePath(base_path('sidecar/dotnet/bin/Release/netcoreapp3.1/publish'))
            ->include('*');
    }
}
