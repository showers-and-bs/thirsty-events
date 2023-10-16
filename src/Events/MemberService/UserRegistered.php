<?php

namespace ShowersAndBs\ThirstyEvents\Events\MemberService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class UserRegistered implements ShouldBePublished
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
     * @var array
     */
    public readonly array $allChannels;

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

        $instance->userId      = $userInfo['userId'];
        $instance->username    = $userInfo['username'];
        $instance->allChannels = $userInfo['allChannels'];
        $instance->canDownload = $userInfo['canDownload'];

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
            implode(', ', $this->allChannels),
            $this->canDownload,
        ];

        return implode("\n", $output);
    }
}
