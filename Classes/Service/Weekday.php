<?php
declare(strict_types = 1);

namespace Ayacoo\Bitset\Service;

class Weekday extends \TYPO3\CMS\Core\Type\BitSet
{
    public const NONE = 0b0; // 0
    public const SUNDAY = 0b1; // 1
    public const MONDAY = 0b10; // 2
    public const TUESDAY = 0b100; // 4
    public const WEDNESDAY = 0b1000; // 8
    public const THURSDAY = 0b10000; // 16
    public const FRIDAY = 0b100000; // 32
    public const SATURDAY = 0b1000000; // 64
    public const ALL = 0b1; // 127

    /**
     * @param int $weekday
     * @return bool
     */
    public function hasWeekday(int $weekday): bool
    {
        return $this->get($weekday);
    }

    /**
     * @return bool
     */
    public function hasAllWeekdays(): bool
    {
        return $this->get(static::ALL);
    }

    /**
     * @param int $weekday
     */
    public function allow(int $weekday): void
    {
        $this->set($weekday);
    }
}