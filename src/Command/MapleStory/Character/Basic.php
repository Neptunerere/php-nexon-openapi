<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command\MapleStory\Character;

use Neptunerere\PhpNexonOpenApi\Command\CommandInterface;
use Neptunerere\PhpNexonOpenApi\Enums\{
    MapleStoryCode,
    ApiVersion,
    HttpMethod,
};

class Basic implements CommandInterface
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
        return MapleStoryCode::CHARACTER . '/basic';
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
            'ocid' => $this->ocid,
            'date' => $this->date,
        );
    }
}