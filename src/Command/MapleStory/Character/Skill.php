<?php

declare(strict_types=1);

namespace Neptunerere\PhpNexonOpenApi\Command\MapleStory\Character;

use Neptunerere\PhpNexonOpenApi\Command\CommandInterface;
use Neptunerere\PhpNexonOpenApi\Enums\{
    MapleStoryCode,
    ApiVersion,
    HttpMethod,
};

class Skill implements CommandInterface
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
     * @var string
     */
    protected string $characterSkillGrade;

    /**
     * @param string $ocid
     * @param string $date
     * @param string $characterSkillGrade
     */
    public function __construct(string $ocid, string $date, string $characterSkillGrade)
    {
        $this->ocid = $ocid;
        $this->date = $date;
        $this->characterSkillGrade = $characterSkillGrade;
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
        return MapleStoryCode::CHARACTER . '/skill';
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
            'character_skill_grade' => $this->characterSkillGrade,
        );
    }
}