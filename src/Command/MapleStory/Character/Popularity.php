<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command;

use Neptunerere\PhpNexonOpenApi\Enums\MapleStoryCode;

class Popularity implements CommandInterface
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
        return MapleStoryCode::MAPLESTORY;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod()
    {
        return MapleStoryCode::CHARACTER . '/popularity';
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
            'ocid' => $this->ocid,
            'date' => $this->date,
        );
    }
}