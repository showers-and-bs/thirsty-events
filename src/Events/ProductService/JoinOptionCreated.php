<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class JoinOptionCreated implements ShouldBePublished
{

    /**
     * @var int
     */
    public readonly int $joinOptionId;

    /**
     * @var string
     */
    public readonly string $joinOptionUlid;

    /**
     * @var string
     */
    public readonly string $name;

    /**
     * @var string|null
     */
    public readonly string|null $description;

    /**
     * @var string
     */
    public readonly string $status;

    /**
     * @var string|null
     */
    public readonly string|null $activeDate;

    /**
     * @var string|null
     */
    public readonly string|null $inactiveDate;

    /**
     * @var string
     */
    public readonly string $currency;

    /**
     * @var float
     */
    public readonly float $initialPrice;

    /**
     * @var int
     */
    public readonly int|null $initialPeriod;

    /**
     * @var string|null [DAY, MONTH, YEAR]
     */
    public readonly string|null $initialPeriodUnit;

    /**
     * @var float|null
     */
    public readonly float|null $recurringPrice;

    /**
     * @var int|null
     */
    public readonly int|null $recurringPeriod;

    /**
     * @var string|null [DAY, MONTH, YEAR]
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

    /**
     * Create an event instance from array.
     *
     * @return self
     */
    public static function createFromArray(array $joinOption, array $products)
    {
        $instance = new self;

        $instance->joinOptionId        = $joinOption['id'];
        $instance->joinOptionUlid      = $joinOption['ulid'];
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

    /**
     * Gets a string representation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        $output = [
            $this->joinOptionId,
            'ulid: ' . $this->joinOptionUlid,
            'name: ' . $this->name,
            'description: ' . $this->description,
            'status: ' . $this->status,
            'activeDate: ' . $this->activeDate,
            'inactiveDate: ' . $this->inactiveDate,
            'currency: ' . $this->currency,
            'initialPrice: ' . $this->initialPrice,
            'initialPeriod: ' . $this->initialPeriod,
            'initialPeriodUnit: ' . $this->initialPeriodUnit,
            'recurringPrice: ' . $this->recurringPrice,
            'recurringPeriod: ' . $this->recurringPeriod,
            'recurringPeriodUnit: ' . $this->recurringPeriodUnit,
            'products: ' . implode(', ', array_keys($this->products)),
        ];

        return implode("\n", $output);
    }
}
