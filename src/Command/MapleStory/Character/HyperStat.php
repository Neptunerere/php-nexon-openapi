<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command\MapleStory\Character;

use Neptunerere\PhpNexonOpenApi\Command\CommandInterface;
use Neptunerere\PhpNexonOpenApi\Enums\{
    MapleStoryCode,
    ApiVersion,
    HttpMethod,
};

class HyperStat implements CommandInterface
{
    /**
     * @var string
     */
    protected string $ocid;

    /**
     * @var string
     */
    protected string $date;

    /**
     * @param string $ocid
     * @param string $date
     */
    public function __construct(string $ocid, string $date)
    {
        $this->ocid = $ocid;
        $this->date = $date;
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
        return MapleStoryCode::CHARACTER->value . '/hyper-stat';
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
            'ocid' => $this->ocid,
            'date' => $this->date,
        );
    }
}