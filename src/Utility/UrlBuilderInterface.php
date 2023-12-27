<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Utility;

use Neptunerere\PhpNexonOpenApi\Command\CommandInterface;

interface UrlBuilderInterface
{
    /**
     * @param string $baseUrl
     * @return self
     */
    public function setBaseUrl($baseUrl);

    /**
     * @return string
     */
    public function getBaseUrl();

    /**
     * @param CommandInterface $commandInterface
     * @return string
     */
    public function build(CommandInterface $commandInterface);
}