<?php

declare(strict_types=1);

/*
 * This file is part of the Zikula package.
 *
 * Copyright Zikula Foundation - https://ziku.la/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zikula\SeaBreezeTheme\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class SeaBreezeThemeExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('urldecode', [$this, 'urldecode'], ['is_safe' => ['html']])
        ];
    }

    public function urldecode(string $string): string
    {
        return urldecode($string);
    }
}
