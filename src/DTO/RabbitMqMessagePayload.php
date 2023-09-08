<?php

namespace ShowersAndBs\ThirstyEvents\DTO;

class RabbitMqMessagePayload {
    private function __construct(
        public readonly string $created_at,
        public readonly string $event_id,
        public readonly string $event,
        public readonly string $payload
    ) {}

    public static function create(string $created_at, string $event_id, string $event, string $payload): RabbitMqMessagePayload
    {
        return new self($created_at, $event_id, $event, $payload);
    }

    public static function createFromArray(array $array): RabbitMqMessagePayload
    {
        return new self($array['created_at'], $array['event_id'], $array['event'], $array['payload']);
    }

    public function serialize(): string
    {
        return serialize($this);
    }
}
