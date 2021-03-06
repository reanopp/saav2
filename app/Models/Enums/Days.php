<?php
/**
 *
 */

namespace App\Models\Enums;

/**
 * Class Days
 * @package App\Models\Enums
 */
class Days extends EnumBase {

    const MONDAY    = 1 << 0;
    const TUESDAY   = 1 << 1;
    const WEDNESDAY = 1 << 2;
    const THURSDAY  = 1 << 3;
    const FRIDAY    = 1 << 4;
    const SATURDAY  = 1 << 5;
    const SUNDAY    = 1 << 6;

    protected static $labels = [
        Days::MONDAY        => 'system.days.mon',
        Days::TUESDAY       => 'system.days.tues',
        Days::WEDNESDAY     => 'system.days.wed',
        Days::THURSDAY      => 'system.days.thurs',
        Days::FRIDAY        => 'system.days.fri',
        Days::SATURDAY      => 'system.days.sat',
        Days::SUNDAY        => 'system.days.sun',
    ];
}
