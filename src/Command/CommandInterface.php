<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command;

interface CommandInterface
{
    public function getGameName();

    /**
     * @return string
     */
    public function getMethod();

    /**
     * @return string
     */
    public function getVersion();

    /**
     * @return string
     */
    public function getRequestMethod();
    
    /**
     * @return array
     */
    public function getParams();
}