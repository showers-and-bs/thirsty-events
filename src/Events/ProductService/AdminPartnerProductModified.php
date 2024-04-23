<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class AdminPartnerProductModified implements ShouldBePublished
{

    /**
     * @var string
     */
    public readonly int $partnerId;

    /**
     * @var array
     */
    public readonly array $products;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Create an event instance from array.
     *
     * @return self
     */
    public static function createFromArray(int $partnerId, array $products)
    {
        $instance = new self;

        $instance->partnerId = $partnerId;
        $instance->products = $products;

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
            $this->partnerId,
            implode(', ', $this->products),
        ];

        return implode("\n", $output);
    }
}
