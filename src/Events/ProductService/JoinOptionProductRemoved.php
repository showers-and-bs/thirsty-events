<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class JoinOptionProductRemoved implements ShouldBePublished
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
     * Create a new event instance.
     *
     * @param string $productId
     * @param string $joinOptionId
     * @param string|null $displayToTheUsers
     */
    public function __construct(
        string  $productId,
        string  $joinOptionId,
    ) {
        $this->productId = $productId;
        $this->joinOptionId = $joinOptionId;
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
