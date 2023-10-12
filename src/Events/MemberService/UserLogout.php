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
     * @var string
     */
    public readonly string $jwtTokenToInvalidate;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(string $username, string $jwtTokenToInvalidate)
    {
        $this->username = $username;
        $this->jwtTokenToInvalidate = $jwtTokenToInvalidate;
    }
}
