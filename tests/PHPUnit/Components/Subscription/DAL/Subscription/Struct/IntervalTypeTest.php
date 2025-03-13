<?php
declare(strict_types=1);

namespace MolliePayments\Tests\Components\Subscription\DAL\Subscription\Struct;

use Kiener\MolliePayments\Components\Subscription\DAL\Subscription\Struct\IntervalType;
use PHPUnit\Framework\TestCase;

class IntervalTypeTest extends TestCase
{
    /**
     * This test verifies that the value of our constant is correct.
     */
    public function testDAYS(): void
    {
        static::assertSame('days', IntervalType::DAYS);
    }

    /**
     * This test verifies that the value of our constant is correct.
     */
    public function testWEEKS(): void
    {
        static::assertSame('weeks', IntervalType::WEEKS);
    }

    /**
     * This test verifies that the value of our constant is correct.
     */
    public function testMONTHS(): void
    {
        static::assertSame('months', IntervalType::MONTHS);
    }
}
