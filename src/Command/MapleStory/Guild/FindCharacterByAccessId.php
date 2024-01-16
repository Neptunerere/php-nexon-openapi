<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command\MapleStory\Guild;

use Neptunerere\PhpNexonOpenApi\Command\CommandInterface;
use Neptunerere\PhpNexonOpenApi\Enums\{
    MapleStoryCode,
    ApiVersion,
    HttpMethod,
};

class FindCharacterByAccessId implements CommandInterface
{
    /**
     * @var string
     */
    protected string $guildName;

    /**
     * @var string
     */
    protected string $worldName;

    /**
     * @param string $guildName
     * @param string $worldName
     */
    public function __construct(string $guildName, string $worldName)
    {
        $this->guildName = $guildName;
        $this->worldName = $worldName;
    }

    /**
     * {@inheritDoc}
     */
    public function getGameName()
    {
        return MapleStoryCode::MAPLESTORY->value;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod()
    {
        return MapleStoryCode::GUILD->value . '/id';
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {
        return ApiVersion::VERSION_1->value;
    }

    /**
     * {@inheritDoc}
     */
    public function getRequestMethod()
    {
        return HttpMethod::GET->name;
    }

    /**
     * {@inheritDoc}
     */
    public function getParams()
    {
        return array(
            'guild_name' => $this->guildName,
            'world_name' => $this->worldName,
        );
    }
}