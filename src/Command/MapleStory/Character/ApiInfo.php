<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\MapleStory\Character;

enum ApiInfo
{
    case MAPLESTORY;

    case CHARACTER;

    /**
     * @param string $apiInfo
     * @return ApiInfo
     */
    public static function fromString(string $apiInfo): ApiInfo {
        return match (strtoupper($apiInfo)) {
            'MAPLESTORY' => self::MAPLESTORY,
            'CHARACTER' => self::CHARACTER,
            default => throw new \InvalidArgumentException("Invalid ApiInfo: $apiInfo"),
        };
    }
}