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
        return MapleStoryCode::MAPLESTORY->value;
    }

    /**
     * {@inheritDoc}
     */
    public function getMethod()
    {
        return MapleStoryCode::CHARACTER->value . '/skill';
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
            'character_skill_grade' => $this->characterSkillGrade,
        );
    }
}