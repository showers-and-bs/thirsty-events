<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class JoinOptionModified implements ShouldBePublished
{

    /**
     * @var int
     */
    public readonly int $joinOptionId;

    /**
     * @var string
     */
    public readonly string $name;

    /**
     * @var string
     */
    public readonly string|null $description;

    /**
     * @var string
     */
    public readonly string $status;

    /**
     * @var string
     */
    public readonly string|null $activeDate;

    /**
     * @var string
     */
    public readonly string|null $inactiveDate;

    /**
     * @var string
     */
    public readonly string $currency;

    /**
     * @var decimal
     */
    public readonly float $initialPrice;

    /**
     * @var int
     */
    public readonly int|null $initialPeriod;

    /**
     * @var string [DAY, MONTH, YEAR]
     */
    public readonly string|null $initialPeriodUnit;

    /**
     * @var decimal
     */
    public readonly float|null $recurringPrice;

    /**
     * @var int
     */
    public readonly int|null $recurringPeriod;

    /**
     * @var string [DAY, MONTH, YEAR]
     */
    public readonly string|null $recurringPeriodUnit;

    /**
     * @var array Associated products id
     */
    public readonly array $products;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public static function createFromArray(array $joinOption, array $products)
    {
        $instance = new self;

        $instance->joinOptionId        = $joinOption['id'];
        $instance->name                = $joinOption['name'];
        $instance->description         = $joinOption['description'];
        $instance->status              = $joinOption['status'];
        $instance->activeDate          = $joinOption['active_date'];
        $instance->inactiveDate        = $joinOption['inactive_date'];
        $instance->currency            = $joinOption['currency'];
        $instance->initialPrice        = $joinOption['initial_price'];
        $instance->initialPeriod       = $joinOption['initial_period'];
        $instance->initialPeriodUnit   = $joinOption['initial_period_unit'];
        $instance->recurringPrice      = $joinOption['recurring_price'];
        $instance->recurringPeriod     = $joinOption['recurring_period'];
        $instance->recurringPeriodUnit = $joinOption['recurring_period_unit'];
        $instance->products            = $products;

        return $instance;
    }
}
