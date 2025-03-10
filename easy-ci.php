<?php

declare(strict_types=1);

use Symplify\EasyCI\Config\EasyCIConfig;

return static function (EasyCIConfig $easyCIConfig): void {
    $easyCIConfig->paths([__DIR__ . '/config', __DIR__ . '/src', __DIR__ . '/rules']);

    $easyCIConfig->typesToSkip([
        \Rector\Contract\Rector\RectorInterface::class,
    ]);
};
