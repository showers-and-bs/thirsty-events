<?php

namespace ShowersAndBs\ThirstyEvents\Events\PaymentService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class InitialPaymentSuccess implements ShouldBePublished
{
    /**
     * @var int
     */
    public readonly int $userId;

    /**
     * @var string
     */
    public readonly string $productId;

    /**
     * @var string
     */
    public readonly string $joinOptionName;

    /**
     * @var string
     */
    public readonly string $joinOptionDescription;

    /**
     * @var string
     */
    public readonly string $currency;

    /**
     * @var string
     */
    public readonly string $initialPrice;

    /**
     * @var int
     */
    public readonly int $initialPeriod;
    /**
     * @var string
     */
    public readonly string $recurringPrice;

    /**
     * @var string
     */
    public readonly string $recurringPeriod;

    /**
     * @var string
     */
    public readonly string $biller;
    /**
     * @var int
     */
    public readonly int $billerMemberId;

    /**
     * @var string
     */
    public readonly string $joinedAt;

    /**
     * @var string
     */
    public readonly string $nextRebill;

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
     * @param int $userId
     * @param string $productId
     * @param string $joinOptionName
     * @param string $joinOptionDescription
     * @param string $currency
     * @param string $initialPrice
     * @param int $initialPeriod
     * @param string $recurringPrice
     * @param string $recurringPeriod
     * @param string $biller
     * @param int $billerMemberId
     * @param string $joinedAt
     * @param string $nextRebill
     * @param string $expiresAt
     * @param int $isTrial
     * @param float $spent
     * @param string $status
     */
    public function __construct(
        int $userId,
        string $productId,
        string $joinOptionName,
        string $joinOptionDescription,
        string $currency,
        string $initialPrice,
        int    $initialPeriod,
        string $recurringPrice,
        string $recurringPeriod,
        string $biller,
        int    $billerMemberId,
        string $joinedAt,
        string $nextRebill,
        string $expiresAt,
        int    $isTrial,
        float $spent,
        string $status
    ) {
        $this->userId = $userId;
        $this->productId = $productId;
        $this->joinOptionName = $joinOptionName;
        $this->joinOptionDescription = $joinOptionDescription;
        $this->currency = $currency;
        $this->initialPrice = $initialPrice;
        $this->initialPeriod = $initialPeriod;
        $this->recurringPrice = $recurringPrice;
        $this->recurringPeriod = $recurringPeriod;
        $this->biller = $biller;
        $this->billerMemberId = $billerMemberId;
        $this->joinedAt = $joinedAt;
        $this->nextRebill = $nextRebill;
        $this->expiresAt = $expiresAt;
        $this->isTrial = $isTrial;
        $this->spent = $spent;
        $this->status = $status;
    }


    public function __toString(): string
    {
        return implode("\n", (array)$this);
    }
}