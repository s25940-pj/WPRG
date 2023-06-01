<?php

class Ubezpieczenie extends AutoZDodatkami
{
    private float $isurance_value;
    private int $years_of_possesion;

    /**
     * @param float $isurance_value
     * @param int $years_of_possesion
     */
    public function __construct(string $make,
                                float  $price,
                                float  $euro_exchange_rate,
                                float  $alarm,
                                float  $radio,
                                float  $air_conditioning,
                                float  $isurance_value,
                                int    $years_of_possesion)
    {
        parent::__construct($make, $price, $euro_exchange_rate, $alarm, $radio, $air_conditioning);
        $this->isurance_value = $isurance_value;
        $this->years_of_possesion = $years_of_possesion;
    }


    /**
     * @return float
     */
    public function getIsuranceValue(): float
    {
        return $this->isurance_value;
    }

    /**
     * @param float $isurance_value
     */
    public function setIsuranceValue(float $isurance_value): void
    {
        $this->isurance_value = $isurance_value;
    }

    /**
     * @return int
     */
    public function getYearsOfPossesion(): int
    {
        return $this->years_of_possesion;
    }

    /**
     * @param int $years_of_possesion
     */
    public function setYearsOfPossesion(int $years_of_possesion): void
    {
        $this->years_of_possesion = $years_of_possesion;
    }

    public function countPrice(): float
    {
        return ($this->getIsuranceValue() * (parent::getPrice() * ((100 - $this->getYearsOfPossesion()) / 100)));
    }
}