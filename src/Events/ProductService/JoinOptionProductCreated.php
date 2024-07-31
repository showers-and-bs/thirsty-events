<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class JoinOptionProductCreated implements ShouldBePublished
{

    /**
     * @var string
     */
    public readonly string $productId;
    
    /**
     * @var string
     */
    public readonly string $joinOptionId;

    /**
     * @var string|null
     */
    public readonly string|null $buttonText;

    /**
     * @var string|null
     */
    public readonly string|null $promotionalText;

    /**
     * @var string|null
     */
    public readonly string|null $optionInitialTerms;

    /**
     * @var string|null
     */
    public readonly string|null $optionRecurringTerms;

    /**
     * @var string
     */
    public readonly string $pricingLevel;

    /**
     * Create a new event instance.
     *
     * @param string $productId
     * @param string $joinOptionId
     * @param string|null $buttonText
     * @param string|null $promotionalText
     * @param string $pricingLevel
     * @param string|null $optionInitialTerms
     * @param string|null $optionRecurringTerms
     */
    public function __construct(
        string  $productId,
        string  $joinOptionId,
        string|null $buttonText,
        string|null  $promotionalText,
        string $pricingLevel,
        string|null $optionInitialTerms,
        string|null $optionRecurringTerms
    ) {
        $this->productId = $productId;
        $this->joinOptionId = $joinOptionId;
        $this->buttonText = $buttonText;
        $this->promotionalText = $promotionalText;
        $this->pricingLevel = $pricingLevel;
        $this->optionInitialTerms = $optionInitialTerms;
        $this->optionRecurringTerms = $optionRecurringTerms;
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
