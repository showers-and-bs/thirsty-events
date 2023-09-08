<?php

namespace ShowersAndBs\ThirstyEvents\ToPublish;

use ShowersAndBs\TransactionalOutbox\Contracts\ShouldBePublished;

class UserLogout implements ShouldBePublished
{

    /** @var string */
    public $userInfo;

    /**
     * Create a new event instance.
     *
     * @param  string $userInfo
     * @return void
     */
    public function __construct(public string $userInfo)
    {
        $this->userInfo = $userInfo;
    }

}
