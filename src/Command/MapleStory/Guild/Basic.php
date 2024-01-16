<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command\MapleStory\Guild;

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
    protected string $oguildId;

    /**
     * @var string
     */
    protected string $date;

    /**
     * @param string $oguildId
     * @param string $date
     */
    public function __construct(string $oguildId, string $date)
    {
        $this->oguildId = $oguildId;
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
        return MapleStoryCode::GUILD->value . '/basic';
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
            'oguild_id' => $this->oguildId,
            'date' => $this->date,
        );
    }
}