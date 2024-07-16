<?php

namespace ShowersAndBs\ThirstyEvents\Events\MemberService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class UpdateSubscriptions implements ShouldBePublished
{

    /**
     * @var int
     */
    public readonly int $userId;

    /**
     * @var string
     */
    public readonly string $username;

    /**
     * @var string
     */
    public readonly string $membership_level;

    /**
     * @var array
     */
    public readonly array $allChannels;

    /**
     * @var array
     */
    public readonly array $collections;

    /**
     * @var array
     */
    public readonly array $sets;

    /**
     * @var array
     */
    public readonly array $tags;

    /**
     * @var bool
     */
    public readonly bool $canDownload;

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
    public static function createFromArray(array $userInfo)
    {
        $instance = new self;

        $instance->userId           = $userInfo['userId'];
        $instance->username         = $userInfo['username'];
        $instance->membership_level = $userInfo['membership_level'];
        $instance->allChannels      = $userInfo['allChannels'];
        $instance->collections      = $userInfo['collections'];
        $instance->sets             = $userInfo['sets'];
        $instance->tags             = $userInfo['tags'];
        $instance->canDownload      = $userInfo['canDownload'];

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
            $this->userId,
            $this->username,
            $this->membership_level,
            implode(', ', $this->allChannels),
            implode(', ', $this->collections),
            implode(', ', $this->sets),
            implode(', ', $this->tags),
            $this->canDownload,
        ];

        return implode("\n", $output);
    }
}
