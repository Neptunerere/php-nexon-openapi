<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command;
use Neptunerere\PhpNexonOpenApi\MapleStory\Character\ApiInfo;

class FindUserByAccessId implements CommandInterface
{
    /**
     * @var string
     */
    protected string $characterName;

    /**
     * @param string $characterName
     */
    public function __construct(string $characterName)
    {
        $this->characterName = $characterName;
    }

    /**
     * {@inheritDoc}
     */
    public function getGameName()
    {
        return ApiInfo::fromString('MAPLESTORY');
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod()
    {
        return 'id';
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {
        return 'v1';
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestMethod()
    {
        return 'GET';
    }

    /**
     * {@inheritDoc}
     */
    public function getParams()
    {
        return array(
            'character_name' => $this->characterName,
        );
    }
}