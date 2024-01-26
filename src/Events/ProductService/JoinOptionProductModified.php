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
    public readonly string|null $displayToTheUsers;

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
        string  $displayToTheUsers,
    ) {
        $this->productId = $productId;
        $this->joinOptionId = $joinOptionId;
        $this->displayToTheUsers = $displayToTheUsers;
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
