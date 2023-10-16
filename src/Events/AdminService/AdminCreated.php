<?php

namespace ShowersAndBs\ThirstyEvents\Events\AdminService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class AdminCreated implements ShouldBePublished
{

    /**
     * @var int
     */
    public readonly int $adminId;

    /**
     * @var string
     */
    public readonly string $email;

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

    /**
     * Create an event instance from array.
     *
     * @return self
     */
    public static function createFromArray(array $adminInfo)
    {
        $instance = new self;

        $instance->adminId     = $adminInfo['adminId'];
        $instance->email       = $adminInfo['email'];
        $instance->roles       = $adminInfo['roles'];
        $instance->permissions = $adminInfo['permissions'];

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
            $this->adminId,
            $this->email,
            implode(', ', $this->roles),
            implode(', ', $this->permissions),
        ];

        return implode("\n", $output);
    }
}
