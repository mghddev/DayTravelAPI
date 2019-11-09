<?php

namespace DayApi;

class Insurer
{
    /**
     * @var string
     */
    protected $national_code;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $last_name;

    /**
     * @var string
     */
    protected $latin_name;

    /**
     * @var string
     */
    protected $latin_last_name;

    /**
     * @var GenderTypeEnum
     */
    protected $gender;

    /**
     * @var string
     */
    protected $identity_number;

    /**
     * @var string
     */
    protected $mobile;

    /**
     * @var string
     */
    protected $father_name;

    /**
     * @var string
     */
    protected $issued_place;

    /**
     * @var int
     */
    protected $birth_year;

    /**
     * @var string
     */
    protected $postal_code;

    /**
     * @var string
     */
    protected $address;

    /**
     * @var bool
     */
    protected $is_iranian;

    /**
     * @var int
     */
    protected $birth_month;

    /**
     * @var int
     */
    protected $birth_day;

    /**
     * @var int
     */
    protected $m_birth_year;

    /**
     * @var string
     */
    protected $latin_address;

    /**
     * @var string
     */
    protected $unIranian_code;

    /**
     * @var int
     */
    protected $nationality;

    /**
     * @return string
     */
    public function getNationalCode()
    {
        return $this->national_code;
    }

    /**
     * @param $national_code
     * @return $this
     */
    public function setNationalCode($national_code)
    {
        $this->national_code = $national_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param $last_name
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatinName()
    {
        return $this->latin_name;
    }

    /**
     * @param $latin_name
     * @return $this
     */
    public function setLatinName($latin_name)
    {
        $this->latin_name = $latin_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatinLastName()
    {
        return $this->latin_last_name;
    }

    /**
     * @param $latin_last_name
     * @return $this
     */
    public function setLatinLastName($latin_last_name)
    {
        $this->latin_last_name = $latin_last_name;
        return $this;
    }

    /**
     * @return GenderTypeEnum
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param $gender
     * @return $this
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getIdentityNumber()
    {
        return $this->identity_number;
    }

    /**
     * @param $identity_number
     * @return $this
     */
    public function setIdentityNumber($identity_number)
    {
        $this->identity_number = $identity_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param $mobile
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }

    /**
     * @return string
     */
    public function getFatherName()
    {
        return $this->father_name;
    }

    /**
     * @param $father_name
     * @return $this
     */
    public function setFatherName($father_name)
    {
        $this->father_name = $father_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getIssuedPlace()
    {
        return $this->issued_place;
    }

    /**
     * @param $issued_place
     * @return $this
     */
    public function setIssuedPlace($issued_place)
    {
        $this->issued_place = $issued_place;
        return $this;
    }

    /**
     * @return int
     */
    public function getBirthYear()
    {
        return $this->birth_year;
    }

    /**
     * @param $birth_year
     * @return $this
     */
    public function setBirthYear($birth_year)
    {
        $this->birth_year = $birth_year;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * @param $postal_code
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return bool
     */
    public function getIsIranian()
    {
        return $this->is_iranian;
    }

    /**
     * @param $is_iranian
     * @return $this
     */
    public function setIsIranian($is_iranian)
    {
        $this->is_iranian = $is_iranian;
        return $this;
    }

    /**
     * @return int
     */
    public function getBirthMonth()
    {
        return $this->birth_month;
    }

    /**
     * @param $birth_month
     * @return $this
     */
    public function setBirthMonth($birth_month)
    {
        $this->birth_month = $birth_month;
        return $this;
    }

    /**
     * @return int
     */
    public function getBirthDay()
    {
        return $this->birth_day;
    }

    /**
     * @param $birth_day
     * @return $this
     */
    public function setBirthDay($birth_day)
    {
        $this->birth_day = $birth_day;
        return $this;
    }

    /**
     * @return int
     */
    public function getMBirthYear()
    {
        return $this->m_birth_year;
    }

    /**
     * @param $m_birth_year
     * @return $this
     */
    public function setMBirthYear($m_birth_year)
    {
        $this->m_birth_year = $m_birth_year;
        return $this;
    }

    /**
     * @return string
     */
    public function getLatinAddress()
    {
        return $this->latin_address;
    }

    /**
     * @param $latin_address
     * @return $this
     */
    public function setLatinAddress($latin_address)
    {
        $this->latin_address = $latin_address;
        return $this;
    }

    /**
     * @return string
     */
    public function getUnIranianCode()
    {
        return $this->unIranian_code;
    }

    /**
     * @param $unIranian_code
     * @return $this
     */
    public function setUnIranianCode($unIranian_code)
    {
        $this->unIranian_code = $unIranian_code;
        return $this;
    }

    /**
     * @return int
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param $nationality
     * @return $this
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;
        return $this;
    }



}