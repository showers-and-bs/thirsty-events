<?php

namespace ShowersAndBs\ThirstyEvents\Events\ProductService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class ProductCreated implements ShouldBePublished
{

    /**
     * @var string
     */
    public readonly string $productId;

    /**
     * @var string
     */
    public readonly string $name;

    /**
     * @var string|null
     */
    public readonly string|null $description;

    /**
     * @var string
     */
    public readonly string $status;

    /**
     * @var string|null
     */
    public readonly string|null $natsSiteId;

    /**
     * @var array
     */
    public readonly array $tags;

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
    // public readonly array $joinOptions;

    /**
     * @var int|null
     */
    public readonly int|null $priority;


    /**
     * @var array
     */
    public readonly array $includedChannels;

    /**
     * @var array
     */
    public readonly array $includedCollections;

    /**
     * @var array
     */
    public readonly array $includedTags;

    /**
     * @var bool
     */
    public readonly bool $guestsHidden;

    /**
     * @var bool
     */
    public readonly bool $isDownloadable;

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
    public static function createFromArray(array $product/*, array $joinOptions*/)
    {
        $instance = new self;

        $instance->productId   = $product['id'];
        $instance->name        = $product['name'];
        $instance->description = $product['description'];
        $instance->status      = $product['status'];
        $instance->natsSiteId  = $product['nats_site_id'];
        $instance->tags        = $product['tags'];
        $instance->channels    = $product['channels'];
        $instance->collections = $product['collections'];
        $instance->sets        = $product['sets'];
        $instance->priority    = $product['priority'];
        // $instance->joinOptions = $joinOptions;
        $instance->includedTags = $product['included_tags'];
        $instance->includedChannels = $product['included_channels'];
        $instance->includedCollections = $product['included_collections'];
        $instance->guestsHidden = $product['guests_hidden'];
        $instance->isDownloadable = $product['is_downloadable'];

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
            'name: ' . $this->name,
            'status: ' . $this->status,
            'natsSiteId: ' . $this->natsSiteId,
            'priority: ' . $this->priority,
            'tags: ' . implode(', ', $this->tags),
            'channels: ' . implode(', ', $this->channels),
            'collections: ' . implode(', ', $this->collections),
            'sets: ' . implode(', ', $this->sets),
            // 'joinOptions: ' . implode(', ', array_keys($this->joinOptions)),
            'includedTags: ' . implode(', ', $this->includedTags),
            'includedChannels: ' . implode(', ', $this->includedChannels),
            'includedCollections: ' . implode(', ', $this->includedCollections),
            'guestsHidden: ' . $this->guestsHidden,
            'isDownloadable: ' . $this->isDownloadable,
        ];

        return implode("\n", $output);
    }
}
