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
     * @var string
     */
    public readonly string $jwtTokenToInvalidate;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(int $adminId)
    {
        $this->adminId = $adminId;
        $this->jwtTokenToInvalidate = $jwtTokenToInvalidate;
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
            implode("\n", str_split($this->jwtTokenToInvalidate, 70))
        ];

        return implode("\n", $output);
    }
}
