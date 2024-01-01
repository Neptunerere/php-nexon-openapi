<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Enums;

enum HttpMethod
{
    case GET;
    case POST;
    CASE PULL;
    CASE PATCH;
    CASE DELETE;
}