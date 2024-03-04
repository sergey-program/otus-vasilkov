<?php

declare(strict_types=1);

namespace Sergey\OtusVasilkov\Infrastructure;

use Sergey\OtusVasilkov\Application\StringService;

/**
 * @property StringService $stringService
 */
class StringCommand
{
    /**
     * @param StringService $stringService
     */
    public function __construct(private readonly StringService $stringService)
    {
    }

    public function run(): void
    {
        $string = 'some broken bar';

        echo $this->stringService->convert($string) . PHP_EOL;
    }

}