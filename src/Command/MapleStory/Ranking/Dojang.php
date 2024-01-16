<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command\MapleStory\Ranking;

use Neptunerere\PhpNexonOpenApi\Command\CommandInterface;
use Neptunerere\PhpNexonOpenApi\Enums\{
    MapleStoryCode,
    ApiVersion,
    HttpMethod,
};

class Dojang implements CommandInterface
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
     * @var int
     */
    protected int $difficulty;

    /**
     * @var string
     */
    protected string $characterClass;

    /**
     * @var string
     */
    protected string $ocid;

    /**
     * @var string
     */
    protected string $page;

    /**
     * @param string $date
     * @param string $worldName
     * @param int $difficulty
     * @param string $characterClass
     * @param string $ocid
     * @param string $page
     */
    public function __construct
    (
        string $date, string $worldName,
        int $difficulty, string $characterClass,
        string $ocid, string $page
    )
    {
        $this->date = $date;
        $this->worldName = $worldName;
        $this->difficulty = $difficulty;
        $this->characterClass = $characterClass;
        $this->ocid = $ocid;
        $this->page = $page;
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
        return MapleStoryCode::RANKING->value . '/dojang';
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
            'date' => $this->date,
            'world_name' => $this->worldName,
            'difficulty' => $this->difficulty,
            'class' => $this->characterClass,
            'ocid' => $this->ocid,
            'page' => $this->page,
        );
    }
}