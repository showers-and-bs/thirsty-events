<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class ProductAssetDeleted implements ShouldBePublished
{

    /**
     * @var int
     */
    public readonly string $productId;

    /**
     * @var int
     */
    public readonly string $assetType;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $productId, string $assetType)
    {
        $this->productId = $productId;
        $this->assetType = $assetType;
    }

    /**
     * Gets a string representation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        $output = [
            'productId: ' . $this->productId,
            'assetType: ' . $this->assetType,
        ];

        return implode("\n", $output);
    }
}
