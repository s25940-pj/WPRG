<?php

class AutoZDodatkami extends NoweAuto
{
    private float $alarm;
    private float $radio;
    private float $air_conditioning;

    /**
     * @param float $alarm
     * @param float $radio
     * @param float $air_conditioning
     */
    public function __construct(string $make,
                                float  $price,
                                float  $euro_exchange_rate,
                                float  $alarm,
                                float  $radio,
                                float  $air_conditioning)
    {
        parent::__construct($make, $price, $euro_exchange_rate);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->air_conditioning = $air_conditioning;
    }

    /**
     * @return float
     */
    public function getAlarm(): float
    {
        return $this->alarm;
    }

    /**
     * @param float $alarm
     */
    public function setAlarm(float $alarm): void
    {
        $this->alarm = $alarm;
    }

    /**
     * @return float
     */
    public function getRadio(): float
    {
        return $this->radio;
    }

    /**
     * @param float $radio
     */
    public function setRadio(float $radio): void
    {
        $this->radio = $radio;
    }

    /**
     * @return float
     */
    public function getAirConditioning(): float
    {
        return $this->air_conditioning;
    }

    /**
     * @param float $air_conditioning
     */
    public function setAirConditioning(float $air_conditioning): void
    {
        $this->air_conditioning = $air_conditioning;
    }

    public function countPrice(): float
    {
        return parent::countPrice() + $this->getAlarm() + $this->getRadio() + $this->getAirConditioning();
    }
}