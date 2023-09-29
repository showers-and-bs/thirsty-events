<?php

namespace ShowersAndBs\ThirstyEvents\Events\AdminService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class AdminDeleted implements ShouldBePublished
{

    /**
     * @var int
     */
    public readonly int $adminId;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(int $adminId)
    {
        $this->adminId = $adminId;
    }
}
