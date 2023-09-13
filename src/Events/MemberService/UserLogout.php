<?php

namespace ShowersAndBs\ThirstyEvents\Events\MemberService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class UserLogout implements ShouldBePublished
{

    /**
     * @var string
     */
    public readonly string $username;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public static function createFromArray(array $userInfo)
    {
        $instance = new self;

        $instance->userId         = $userInfo['userId'];
        $instance->username       = $userInfo['username'];
        $instance->allChannels    = $userInfo['allChannels'];
        $instance->recentlyViewed = $userInfo['recentlyViewed'];

        return $instance;
    }
}
