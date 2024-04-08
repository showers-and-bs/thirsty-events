<?php

namespace ShowersAndBs\ThirstyEvents\Events\AdminService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class ProductAssetDeleted implements ShouldBePublished
{

    /**
     * @var int
     */
    public readonly int $productId;

    /**
     * @var int
     */
    public readonly int $assetId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(int $productId, int $assetId)
    {
        $this->productId = $productId;
        $this->assetId = $assetId;
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
            'assetId: ' . $this->assetId,
        ];

        return implode("\n", $output);
    }
}
