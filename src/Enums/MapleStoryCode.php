<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Enums;

enum MapleStoryCode: string
{
    case MAPLESTORY = 'maplestory';

    case CHARACTER = 'character';
    case USER = 'user';
    case GUILD = 'guild';
}