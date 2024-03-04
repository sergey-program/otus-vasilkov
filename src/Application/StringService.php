<?php

declare(strict_types=1);

namespace Sergey\OtusVasilkov\Application;

use Cocur\Slugify\Slugify;

/**
 *
 */
class StringService
{
    /**
     * @param string $string
     * @return string
     */
    public function convert(string $string): string
    {
        $slugify = new Slugify();

        return $slugify->slugify($string);
    }
}