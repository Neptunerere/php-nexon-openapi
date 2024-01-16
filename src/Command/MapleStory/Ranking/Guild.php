<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command\MapleStory\Ranking;

use Neptunerere\PhpNexonOpenApi\Command\CommandInterface;
use Neptunerere\PhpNexonOpenApi\Enums\{
    MapleStoryCode,
    ApiVersion,
    HttpMethod,
};

class Guild implements CommandInterface
{
    /**
     * @var string
     */
    protected string $date;

    /**
     * @var string
     */
    protected string $worldName;

    /**
     * @var string
     */
    protected string $rankingType;

    /**
     * @var string
     */
    protected string $guildName;

    /**
     * @var string
     */
    protected string $page;

    /**
     * @param string $date
     * @param string $worldName
     * @param string $rankingType
     * @param string $guildName
     * @param string $page
     */
    public function __construct
    (
        string $date, string $worldName,
        string $rankingType, string $guildName,
        string $page
    )
    {
        $this->date = $date;
        $this->worldName = $worldName;
        $this->rankingType = $rankingType;
        $this->guildName = $guildName;
        $this->page = $page;
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
        return MapleStoryCode::RANKING . '/guild';
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
            'date' => $this->date,
            'world_name' => $this->worldName,
            'ranking_type' => $this->rankingType,
            'guild_name' => $this->guildName,
            'page' => $this->page,
        );
    }
}