<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class ProductModified implements ShouldBePublished
{

    /**
     * @var int
     */
    public readonly int $productId;

    /**
     * @var string
     */
    public readonly string $name;

    /**
     * @var string
     */
    public readonly string $status;

    /**
     * @var int
     */
    public readonly string|null $natsSiteId;

    /**
     * @var array
     */
    public readonly array $channels;

    /**
     * @var array
     */
    public readonly array $collections;

    /**
     * @var array
     */
    public readonly array $sets;

    /**
     * @var array Associated join options id
     */
    public readonly array $joinOptions;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public static function createFromArray(array $product, array $joinOptions)
    {
        $instance = new self;

        $instance->productId   = $product['id'];
        $instance->name        = $product['name'];
        $instance->status      = $product['status'];
        $instance->natsSiteId  = $product['nats_site_id'];
        $instance->channels    = $product['channels'];
        $instance->collections = $product['collections'];
        $instance->sets        = $product['sets'];
        $instance->joinOptions = $joinOptions;

        return $instance;
    }
}
