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
    public function __construct(string $username)
    {
        $this->username = $username;
    }
}
