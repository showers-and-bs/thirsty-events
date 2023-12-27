<?php

namespace ShowersAndBs\ThirstyEvents\Events\PaymentService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class SubscriptionModified implements ShouldBePublished
{
    /**
     * @var int
     */
    public readonly int $id;

    /**
     * @var string
     */
    public readonly string $joinOptionName;

    /**
     * @var string|null
     */
    public readonly string | null $joinOptionDescription;

    /**
     * @var float | null
     */
    public readonly float | null $recurringPrice;

    /**
     * @var int | null
     */
    public readonly int | null $recurringPeriod;

    /**
     * @var string
     */
    public readonly string $billerMemberId;

    /**
     * @var string
     */
    public readonly string $joinedAt;

    /**
     * @var string | null
     */
    public readonly string | null $nextRebill;

    /**
     * @var string
     */
    public readonly string $expiresAt;

    /**
     * @var int
     */
    public readonly int $isTrial;

    /**
     * @var float
     */
    public readonly float $spent;

    /**
     * @var string
     */
    public readonly string $status;

    /**
     * Create a new event instance.
     *
     * @param int $userId
     * @param string $productId
     * @param string $joinOptionName
     * @param string|null $joinOptionDescription
     * @param string $currency
     * @param string $initialPrice
     * @param int $initialPeriod
     * @param string|null $recurringPrice
     * @param string|null $recurringPeriod
     * @param string $biller
     * @param string $billerMemberId
     * @param string $joinedAt
     * @param string|null $nextRebill
     * @param string $expiresAt
     * @param int $isTrial
     * @param float $spent
     * @param string $status
     */
    public function __construct(
        int     $id,
        string  $joinOptionName,
        ?string $joinOptionDescription,
        ?float  $recurringPrice,
        ?int    $recurringPeriod,
        string  $billerMemberId,
        string  $joinedAt,
        ?string $nextRebill,
        string  $expiresAt,
        int     $isTrial,
        float   $spent,
        string  $status
    ) {
        $this->id = $id;
        $this->joinOptionName = $joinOptionName;
        $this->joinOptionDescription = $joinOptionDescription;
        $this->recurringPrice = $recurringPrice;
        $this->recurringPeriod = $recurringPeriod;
        $this->billerMemberId = $billerMemberId;
        $this->joinedAt = $joinedAt;
        $this->nextRebill = $nextRebill;
        $this->expiresAt = $expiresAt;
        $this->isTrial = $isTrial;
        $this->spent = $spent;
        $this->status = $status;
    }

    /**
     * Gets a string representation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return implode("\n", (array)$this);
    }
}
