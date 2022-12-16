<?php

namespace Vuer\LaravelBalance\Dto;

class TransactionDto
{
    /**
     * @var
     */
    private $amount;

    /**
     * @var int|null
     */
    private $type;

    public function __construct($amount, int $type = null)
    {
        $this->amount = $amount;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getAmount(): int
    {
        return $this->amount;
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
}