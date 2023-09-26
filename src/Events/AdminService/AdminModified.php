<?php

namespace ShowersAndBs\ThirstyEvents\Events\AdminService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class AdminModified implements ShouldBePublished
{

    /**
     * @var int
     */
    public readonly int $adminId;

    /**
     * @var array
     */
    public readonly array $roles;

    /**
     * @var array
     */
    public readonly array $permissions;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public static function createFromArray(array $adminInfo)
    {
        $instance = new self;

        $instance->adminId     = $adminInfo['adminId'];
        $instance->roles       = $adminInfo['roles'];
        $instance->permissions = $adminInfo['permissions'];

        return $instance;
    }
}
