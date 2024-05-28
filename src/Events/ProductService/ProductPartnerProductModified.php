<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class ProductPartnerProductModified implements ShouldBePublished
{

    /**
     * @var string
     */
    public readonly int $partnerId;
    
    /**
     * @var string
     */
    public readonly string $productId;

    /**
     * @var int|null
     */
    public readonly int|null $payoutPercentage;

    /**
     * @var int|null
     */
    public readonly int|null $profitExpensePercentage;


    /**
     * Create a new event instance.
     *
     * @param int $partnerId
     * @param string $productId
     * @param int|null $payoutPercentage
     * @param int|null $profitExpensePercentage
     */
    public function __construct(
        int  $partnerId,
        string  $productId,
        int|null  $payoutPercentage,
        int|null $profitExpensePercentage
    ) {
        $this->partnerId = $partnerId;
        $this->productId = $productId;
        $this->payoutPercentage = $payoutPercentage;
        $this->profitExpensePercentage = $profitExpensePercentage;
    }

    /**
     * Gets a string representation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return implode("\n", (array)$this);
    }
}
