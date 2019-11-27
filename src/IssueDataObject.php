<?php

namespace mghddev\dayapi;

class IssueDataObject
{
    /**
     * @var Insurer
     */
    protected $insurer;

    /**
     * @var string
     */
    protected $passportNumber;

    /**
     * @var int
     */
    protected $coverage;

    /**
     * @var DurationTravelKindEnum
     */
    protected $duration_travel_kind_enum;

    /**
     * @var int
     */
    protected $duration;

    /**
     * @var int
     */
    protected $gregorian_birth_year;

    /**
     * @var int
     */
    protected $gregorian_birth_month;

    /**
     * @var int
     */
    protected $gregorian_birth_day;

    /**
     * @var int
     */
    protected $country_code;

    /**
     * @var string
     */
    protected $deposit_identity;

    /**
     * @var string
     */
    protected $receipt_number;

    /**
     * @var string
     */
    protected $receipt_date;

    /**
     * @return Insurer
     */
    public function getInsurer()
    {
        return $this->insurer;
    }

    /**
     * @param $insurer
     * @return $this
     */
    public function setInsurer($insurer)
    {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassportNumber()
    {
        return $this->passportNumber;
    }

    /**
     * @param $passportNumber
     * @return $this
     */
    public function setPassportNumber($passportNumber)
    {
        $this->passportNumber = $passportNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getCoverage()
    {
        return $this->coverage;
    }

    /**
     * @param $coverage
     * @return $this
     */
    public function setCoverage($coverage)
    {
        $this->coverage = $coverage;
        return $this;
    }

    /**
     * @return DurationTravelKindEnum
     */
    public function getDurationTravelKindEnum()
    {
        return $this->duration_travel_kind_enum;
    }

    /**
     * @param $duration_travel_kind_enum
     * @return $this
     */
    public function setDurationTravelKindEnum($duration_travel_kind_enum)
    {
        $this->duration_travel_kind_enum = $duration_travel_kind_enum;
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
    public function getGregorianBirthYear()
    {
        return $this->gregorian_birth_year;
    }

    /**
     * @param $gregorian_birth_year
     * @return $this
     */
    public function setGregorianBirthYear($gregorian_birth_year)
    {
        $this->gregorian_birth_year = $gregorian_birth_year;
        return $this;
    }

    /**
     * @return int
     */
    public function getGregorianBirthMonth()
    {
        return $this->gregorian_birth_month;
    }

    /**
     * @param $gregorian_birth_month
     * @return $this
     */
    public function setGregorianBirthMonth($gregorian_birth_month)
    {
        $this->gregorian_birth_month = $gregorian_birth_month;
        return $this;
    }

    /**
     * @return int
     */
    public function getGregorianBirthDay()
    {
        return $this->gregorian_birth_day;
    }

    /**
     * @param $gregorian_birth_day
     * @return $this
     */
    public function setGregorianBirthDay($gregorian_birth_day)
    {
        $this->gregorian_birth_day = $gregorian_birth_day;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param $country_code
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDepositIdentity()
    {
        return $this->deposit_identity;
    }

    /**
     * @param $deposit_identity
     * @return $this
     */
    public function setDepositIdentity($deposit_identity)
    {
        $this->deposit_identity = $deposit_identity;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->receipt_number;
    }

    /**
     * @param $receipt_number
     * @return $this
     */
    public function setReceiptNumber($receipt_number)
    {
        $this->receipt_number = $receipt_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getReceiptDate()
    {
        return $this->receipt_date;
    }

    /**
     * @param $receipt_date
     * @return $this
     */
    public function setReceiptDate($receipt_date)
    {
        $this->receipt_date = $receipt_date;
        return $this;
    }

}