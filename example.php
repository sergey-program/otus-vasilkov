<?php

declare(strict_types=1);

// no need require in usage, composer autoloader will do
require __DIR__ . '/vendor/autoload.php';

$service = new \Sergey\OtusVasilkov\Application\StringService();
$command = new \Sergey\OtusVasilkov\Infrastructure\StringCommand($service);

$command->run();

