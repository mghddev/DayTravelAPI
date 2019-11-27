<?php

namespace mghddev\dayapi;

class PriceResponse
{
    /**
     * @var float
     */
    protected $premium;

    /**
     * @var int
     */
    protected $coverage;

    /**
     * @return float
     */
    public function getPremium(): float
    {
        return $this->premium;
    }

    /**
     * @param float $premium
     * @return $this
     */
    public function setPremium(float $premium)
    {
        $this->premium = $premium;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCoverage(): ?int
    {
        return $this->coverage;
    }

    /**
     * @param int|null $coverage
     * @return $this
     */
    public function setCoverage(?int $coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

}