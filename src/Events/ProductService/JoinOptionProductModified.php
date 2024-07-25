<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class JoinOptionProductModified implements ShouldBePublished
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
     */
    public function __construct(
        string  $productId,
        string  $joinOptionId,
        string|null $buttonText,
        string|null  $promotionalText,
        string $pricingLevel,
    ) {
        $this->productId = $productId;
        $this->joinOptionId = $joinOptionId;
        $this->buttonText = $buttonText;
        $this->promotionalText = $promotionalText;
        $this->pricingLevel = $pricingLevel;
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
