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

    /**
     * Gets a string representation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return 'adminId: ' . $this->adminId;
    }
}
