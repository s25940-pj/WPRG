<?php
class NoweAuto
{
    private string $make;
    private float $price;
    private float$euro_exchange_rate;

    /**
     * @param string $make
     * @param float $price
     * @param float $euro_exchange_rate
     */
    public function __construct(string $make, float $price, float $euro_exchange_rate)
    {
        $this->make = $make;
        $this->price = $price;
        $this->euro_exchange_rate = $euro_exchange_rate;
    }

    /**
     * @return string
     */
    public function getMake(): string
    {
        return $this->make;
    }

    /**
     * @param string $make
     */
    public function setMake(string $make): void
    {
        $this->make = $make;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getEuroExchangeRate(): float
    {
        return $this->euro_exchange_rate;
    }

    /**
     * @param float $euro_exchange_rate
     */
    public function setEuroExchangeRate(float $euro_exchange_rate): void
    {
        $this->euro_exchange_rate = $euro_exchange_rate;
    }

    /**
     * @return float
     */
    public function countPrice() : float {
        return $this->getPrice() * $this->getEuroExchangeRate();
    }
}