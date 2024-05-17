<?php

namespace ShowersAndBs\ThirstyEvents\Events\AdminService;

use ShowersAndBs\ThirstyEvents\Contracts\ShouldBePublished;

class PartnerDetailsCreated implements ShouldBePublished
{

    /**
     * @var int
     */
    public readonly int $partnerId;

    /**
     * @var int|null
     */
    public readonly ?int $minimumPayout;

    /**
     * @var float|null
     */
    public readonly ?float $payoutPercentage;

    /**
     * @var string|null
     */
    public readonly ?string $paymentMethod;

    /**
     * @var float|null
     */
    public readonly ?float $paymentMethodDeduction;

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
    public static function createFromArray(array $partnerInfo)
    {
        $instance = new self;

        $instance->partnerId = $partnerInfo['partnerId'];
        $instance->minimumPayout = $partnerInfo['minimumPayout'];
        $instance->payoutPercentage = $partnerInfo['payoutPercentage'];
        $instance->paymentMethod = $partnerInfo['paymentMethod'];
        $instance->paymentMethodDeduction = $partnerInfo['paymentMethodDeduction'];

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
            $this->partnerId,
            'minimumPayout' => $this->minimumPayout,
            'payoutPercentage' => $this->payoutPercentage,
            'paymentMethod' => $this->paymentMethod,
            'paymentMethodDeduction' => $this->paymentMethodDeduction,
        ];

        return implode("\n", $output);
    }
}
