<?php

namespace ShowersAndBs\ThirstyEvents\Events;

use ShowersAndBs\TransactionalOutbox\Contracts\ShouldBePublished;

class TestEvent implements ShouldBePublished
{
    /**
     * Create a new event instance.
     *
     * @param  string $message
     * @return void
     */
    public function __construct(public string $message)
    {
        $this->message = $message
    }
}
