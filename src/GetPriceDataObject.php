<?php

namespace DayApi;

class GetPriceDataObject
{
    protected $currency;

    /**
     * @var int
     */
    protected $zone_id;

    /**
     * @var int
     */
    protected $duration;

    /**
     * @var int
     */
    protected $age;

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return int
     */
    public function getZoneId()
    {
        return $this->zone_id;
    }

    /**
     * @param $zone_id
     * @return $this
     */
    public function setZoneId($zone_id)
    {
        $this->zone_id = $zone_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param $age
     * @return $this
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

}