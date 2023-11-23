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
     * @var array
     */
    public readonly array $collections;

    /**
     * @var array
     */
    public readonly array $sets;

    /**
     * @var bool
     */
    public readonly bool $canDownload;

    /**
     * @var string|null
     */
    public readonly string|null $biller;

    /**
     * @var string|null
     */
    public readonly string|null $billerMemberid;

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

        $instance->userId         = $userInfo['userId'];
        $instance->username       = $userInfo['username'];
        $instance->allChannels    = $userInfo['allChannels'];
        $instance->collections    = $userInfo['collections'];
        $instance->sets           = $userInfo['sets'];
        $instance->canDownload    = $userInfo['canDownload'];
        $instance->biller         = $userInfo['biller'];
        $instance->billerMemberid = $userInfo['billerMemberid'];

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
            implode(', ', $this->collections),
            implode(', ', $this->sets),
            'canDownload: ' . $this->canDownload,
            'biller: ' . $this->biller,
            'billerMemberid: ' . $this->billerMemberid,
        ];

        return implode("\n", $output);
    }
}
