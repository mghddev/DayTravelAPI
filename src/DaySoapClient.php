<?php

namespace mghddev\dayapi;

use mghddev\dayapi\Exception\ApiResponseConnectException;
use mghddev\dayapi\Exception\APIResponseException;
use mghddev\dayapi\Exception\CheckingDayAPIException;
use SoapClient;
use SoapFault;


class DaySoapClient implements iDayClient
{
    /**
     * @var string
     */
    private $user_name;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $wsdl_url;

    /**
     * @var SoapClient
     */
    private $soap_client = null;

    /**
     * DaySoapClient constructor.
     * @param string $wsdl_url
     * @param string $user_name
     * @param string $password
     */
    function __construct(string $wsdl_url, string $user_name, string $password)
    {
        $this->wsdl_url = $wsdl_url;
        $this->user_name = $user_name;
        $this->password = $password;
    }

    private function getSoapClient()
    {
        if(! is_null($this->soap_client)) {
            return $this->soap_client;
        }

        try{
            $this->soap_client = new SoapClient(
                $this->wsdl_url,
                ['exception' => true, 'trace' => 1]
            );

            return $this->soap_client;
        }

        catch (\Exception $e) {

            if (
                get_class($e) == SoapFault::class &&
                Str::contains($e->getMessage(), "SOAP-ERROR: Parsing WSDL: Couldn't load from")
            ) {
                throw new ApiResponseConnectException;
            }

            else {
                throw new APIResponseException($e->getMessage());
            }
        }

    }

    /**
     * @return bool
     * @throws APIResponseException
     * @throws ApiResponseConnectException
     * @throws CheckingDayAPIException
     */
    public function checkSafety()
    {
        $UserName = $this->user_name;
        $Password = $this->password;

        $params = compact('UserName', 'Password');

        $result = $this->getSoapClient()->CheckSafety($params)->CheckSafetyResult;

        if ($result->Error != 'Safety') {
            throw new CheckingDayAPIException('Api of Day travel insurance isn\'t ready.');
        }

        return true;
    }

    /**
     * @param GetPriceDataObject $get_price_data_object
     * @return mixed
     * @throws APIResponseException
     * @throws ApiResponseConnectException
     * @throws CheckingDayAPIException
     */
    function getPrice(GetPriceDataObject $get_price_data_object)
    {
        $this->checkSafety();

        $UserName = $this->user_name;
        $Password = $this->password;
        $ZoneId = $get_price_data_object->getZoneId();
        $Age = $get_price_data_object->getAge();
        $Duration = $get_price_data_object->getDuration();
        $Currency = 'Rial';

        $params = compact('UserName', 'Password', 'ZoneId', 'Age', 'Duration', 'Currency');

        $result = $this->getSoapClient()->TravelRate($params)->TravelRateResult;

        if ($result->Error != 'NotError') {
            throw new APIResponseException($result->Error);
        }

//        $array_result = json_decode($result->ResponseText, true);
//
//        $coverages = file_get_contents('docs/coverage.json');
//
//        $coverages_array = json_decode($coverages, true);
//
//        $coverageValue = [];
//        foreach ($coverages_array as $coverage) {
//            $coverageValue[$coverage['Id']] = $coverage['Value'];
//        }
//
//        $response = [];
//        foreach ($array_result as $item) {
//            $res = new PriceResponse();
//            $res->setPremium($item['Premium']);
////            $res->setCoverage($coverageValue[$item['Coverage']]);
//            $response[] = $res;
//        }

        return $result;
    }

    /**
     * @param IssueDataObject $issue_data_object
     * @return mixed|void
     * @throws APIResponseException
     * @throws ApiResponseConnectException
     */
    function issue(IssueDataObject $issue_data_object)
    {
        $UserName = $this->user_name;
        $Password = $this->password;
        $CountryCode = $issue_data_object->getCountryCode();
        $Coverage = $issue_data_object->getCoverage();
        $Duration = $issue_data_object->getDuration();
        $GregorianBirthDay = $issue_data_object->getGregorianBirthDay();
        $GregorianBirthMonth = $issue_data_object->getGregorianBirthMonth();
        $GregorianBirthYear = $issue_data_object->getGregorianBirthYear();
        $Address = $issue_data_object->getInsurer()->getAddress();
        $BirthDay = $issue_data_object->getInsurer()->getBirthDay();
        $BirthMonth = $issue_data_object->getInsurer()->getBirthMonth();
        $BirthYear = $issue_data_object->getInsurer()->getBirthYear();
        $IdentityNumber = $issue_data_object->getInsurer()->getIdentityNumber();
        $IsIranian = $issue_data_object->getInsurer()->getIsIranian();
        $LastName = $issue_data_object->getInsurer()->getLastName();
        $LatinLastName = $issue_data_object->getInsurer()->getLatinLastName();
        $LastName = $issue_data_object->getInsurer()->getLatinName();
        $MBirthYear = $issue_data_object->getInsurer()->getMBirthYear();
        $Mobile = $issue_data_object->getInsurer()->getMobile();
        $Name = $issue_data_object->getInsurer()->getName();
        $NationalCode = $issue_data_object->getInsurer()->getNationalCode();
        $PhoneNumber = $issue_data_object->getInsurer()->getMobile();
        $PassportNumber = $issue_data_object->getPassportNumber();
        $ReceiptDate = $issue_data_object->getReceiptDate();
        $ReceiptNumber = $issue_data_object->getPassportNumber();

        $params = [
            'UserName' => $this->user_name,
            'Password' => $this->password,
            'IssuedRequest' => [
                'IssuingTravel' => [
                    'CountryCode' => $issue_data_object->getCountryCode(),
                    'Coverage' => $issue_data_object->getCoverage(),
                    'Duration' => $issue_data_object->getDuration(),
                    'GregorianBirthDay' => $issue_data_object->getGregorianBirthDay(),
                    'GregorianBirthMonth' => $issue_data_object->getGregorianBirthMonth(),
                    'GregorianBirthYear' => $issue_data_object->getGregorianBirthYear(),
                    'Insurer' => [
                        'Address' => $issue_data_object->getInsurer()->getAddress(),
                        'BirthDay' => $issue_data_object->getInsurer()->getBirthDay(),
                        'BirthMonth' => $issue_data_object->getInsurer()->getBirthMonth(),
                        'BirthYear' => $issue_data_object->getInsurer()->getBirthYear(),
                        'IdentityNumber' => $issue_data_object->getInsurer()->getIdentityNumber(),
                        'IsIranian' => $issue_data_object->getInsurer()->getIsIranian(),
                        'LastName' => $issue_data_object->getInsurer()->getLastName(),
                        'LatinLastName' => $issue_data_object->getInsurer()->getLatinLastName(),
                        'MBirthYear' => $issue_data_object->getInsurer()->getLatinName(),
                        'Mobile' => $issue_data_object->getInsurer()->getMBirthYear(),
                        'Name' => $issue_data_object->getInsurer()->getMobile(),
                        'NationalCode' => $issue_data_object->getInsurer()->getName(),
                        'PhoneNumber' => $issue_data_object->getInsurer()->getNationalCode(),
                    ],
                    'PassportNumber' => $issue_data_object->getInsurer()->getMobile(),
                    'ReceiptDate' => $issue_data_object->getPassportNumber(),
                    'ReceiptNumber' => $issue_data_object->getReceiptDate(),
                ]
            ]
        ];

        $result = $this->getSoapClient()->TravelIssued($params)->TravelIssuedResult;
        var_dump($result);
        die();

        if ($result->Error != 'NotError') {
            throw new APIResponseException($result->Error);
        }

        return $result;
    }

    /**
     * @param int $country_id
     * @return array
     */
    function getZoneByCountry(int $country_id)
    {
        $zone = file_get_contents('docs/Zones.json');
        $zones_array = json_decode($zone, true);

        $countryZonesArray = [];

        foreach ($zones_array as $zone) {
            $a = array_map(function ($item) {
                return $item['CountryId'];
            }, $zone['countries']);

            if (in_array($country_id, $a)) {
                $countryZonesArray[] = ['id' => $zone['Id'], 'name' => $zone['Name']];
            }
        }

        return $countryZonesArray;
    }
}