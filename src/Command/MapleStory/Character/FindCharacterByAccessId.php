<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command\MapleStory\Character;

use Neptunerere\PhpNexonOpenApi\Command\CommandInterface;
use Neptunerere\PhpNexonOpenApi\Enums\{
    MapleStoryCode,
    ApiVersion,
    HttpMethod,
};

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
        return MapleStoryCode::MAPLESTORY;
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
        return (string) ApiVersion::VERSION_1;
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestMethod()
    {
        return (string) HttpMethod::GET;
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