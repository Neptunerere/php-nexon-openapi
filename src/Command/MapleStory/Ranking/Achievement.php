<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command\MapleStory\Ranking;

use Neptunerere\PhpNexonOpenApi\Command\CommandInterface;
use Neptunerere\PhpNexonOpenApi\Enums\{
    MapleStoryCode,
    ApiVersion,
    HttpMethod,
};

class Achievement implements CommandInterface
{
    /**
     * @var string
     */
    protected string $date;

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
     * @param string $ocid
     * @param string $page
     */
    public function __construct
    (
        string $date, string $ocid,
        string $page
    )
    {
        $this->date = $date;
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
        return MapleStoryCode::RANKING->value . '/achievement';
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
            'ocid' => $this->ocid,
            'page' => $this->page,
        );
    }
}