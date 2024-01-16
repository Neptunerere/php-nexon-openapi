<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command\MapleStory\Probability;

use Neptunerere\PhpNexonOpenApi\Command\CommandInterface;
use Neptunerere\PhpNexonOpenApi\Enums\{
    MapleStoryCode,
    ApiVersion,
    HttpMethod,
};

class Cube implements CommandInterface
{
    /**
     * @var string
     */
    protected string $count;

    /**
     * @var string
     */
    protected string $date;

    /**
     * @var string
     */
    protected string $cursor;

    /**
     * @param string $count
     * @param string $date
     * @param string $cursor
     */
    public function __construct(string $count, string $date, string $cursor)
    {
        $this->count = $count;
        $this->date = $date;
        $this->cursor = $cursor;
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
        return MapleStoryCode::HISTORY . '/cube';
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
            'count' => $this->count,
            'date' => $this->date,
            'cursor' => $this->cursor,
        );
    }
}