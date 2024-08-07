<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class JoinOptionModified implements ShouldBePublished
{

    /**
     * @var string
     */
    public readonly string $joinOptionId;

    /**
     * @var string
     */
    public readonly string $name;

    /**
     * @var string
     */
    public readonly string|null $note;

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
     * @var float
     */
    public readonly float $initialPrice;

    /**
     * @var int|null
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
     * @var int
     */
    public readonly int|null $recurringPeriod;

    /**
     * @var string [DAY, MONTH, YEAR]
     */
    public readonly string|null $recurringPeriodUnit;

    /**
     * @var string
     */
    public readonly string $type;

    /**
     *@var string|null
     */
    public readonly string|null $buttonText;

    /**
     * @var string|null
     */
    public readonly string|null $promotionalText;

    /**
     * @var array Associated products id
     */
    // public readonly array $products;

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
    public static function createFromArray(array $joinOption/*, array $products*/)
    {
        $instance = new self;

        $instance->joinOptionId        = $joinOption['id'];
        $instance->name                = $joinOption['name'];
        $instance->note                = $joinOption['note'];
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
        $instance->type                = $joinOption['type'];
        // $instance->products            = $products;
        $instance->buttonText          = $joinOption['button_text'];
        $instance->promotionalText     = $joinOption['promotional_text'];

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
            'name: ' . $this->name,
            'note: ' . $this->note,
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
            'type: ' . $this->type,
            // 'products: ' . implode(', ', array_keys($this->products)),
            'buttonText: ' . $this->buttonText,
            'promotionalText: ' . $this->promotionalText,
        ];

        return implode("\n", $output);
    }
}
