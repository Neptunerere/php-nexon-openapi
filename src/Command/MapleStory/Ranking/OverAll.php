<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command\MapleStory\Ranking;

use Neptunerere\PhpNexonOpenApi\Command\CommandInterface;
use Neptunerere\PhpNexonOpenApi\Enums\{
    MapleStoryCode,
    ApiVersion,
    HttpMethod,
};

class OverAll implements CommandInterface
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
    protected string $worldType;

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
     * @param string $worldType
     * @param string $characterClass
     * @param string $ocid
     * @param string $page
     */
    public function __construct
    (
        string $date, string $worldName,
        string $worldType, string $characterClass,
        string $ocid, string $page
    )
    {
        $this->date = $date;
        $this->worldName = $worldName;
        $this->worldType = $worldType;
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
        return MapleStoryCode::RANKING->value . '/overall';
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
            'world_type' => $this->worldType,
            'class' => $this->characterClass,
            'ocid' => $this->ocid,
            'page' => $this->page,
        );
    }
}