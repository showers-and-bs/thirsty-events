<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class ProductAssetCreated implements ShouldBePublished
{

    /**
     * @var string
     */
    public readonly string $productId;

    /**
     * @var string|null
     */
    public readonly string|null $logoUrl;

    /**
     * @var string|null
     */
    public readonly string|null $thumbnailUrl;


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
    public static function createFromArray(array $product, string $logoUrl = null, string $thumbnailUrl = null)
    {
        $instance = new self;

        $instance->productId = $product['id'];
        $instance->logoUrl = $logoUrl;
        $instance->thumbnailUrl = $thumbnailUrl;

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
            $this->productId,
            'logoUrl: ' . $this->logoUrl,
            'thumbnailUrl: ' . $this->thumbnailUrl,
        ];

        return implode("\n", $output);
    }
}
