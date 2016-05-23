<?php
namespace CodifyLLC\EnomApi;

class Purchase {
    public $sld;
    public $tld;
    public $UseDNS;
    public $NS1;
    public $NS2;
    public $RenewName;
    public $EmailNotify;
    public $QueueOrder;
    public $AllowQueuing;
    public $IgnoreNSFail;
    public $UseWireTransfer;
    public $RegistrantFirstName;
    public $RegistrantLastName;
    public $RegistrantOrganizationName;
    public $RegistrantJobTitle;
    public $RegistrantAddress1;
    public $RegistrantAddress2;
    public $RegistrantCity;

    /**
     * @var string
     * Registrant state or province choice:
     * S state
     * P province
     */
    public $RegistrantStateProvinceChoice;
    public $RegistrantStateProvince;
    public $RegistrantPostalCode;
    public $RegistrantCountry;
    public $RegistrantEmailAddress;
    public $RegistrantPhone;
    public $RegistrantFax;

    /**
     * @return mixed
     */
    public function getSLD()
    {
        return $this->sld;
    }

    /**
     * @param mixed $SLD
     */
    public function setSLD($SLD)
    {
        $this->sld = $SLD;
    }

    /**
     * @return mixed
     */
    public function getTLD()
    {
        return $this->tld;
    }

    /**
     * @param mixed $TLD
     */
    public function setTLD($TLD)
    {
        $this->tld = $TLD;
    }

    /**
     * @return string
     */
    public function getUseDNS()
    {
        return $this->UseDNS;
    }

    /**
     * @param string $UseDNS
     */
    public function setUseDNS($UseDNS)
    {
        $this->UseDNS = $UseDNS;
    }

    /**
     * @return mixed
     */
    public function getNS1()
    {
        return $this->NS1;
    }

    /**
     * @param mixed $NSX
     */
    public function setNS1($NSX)
    {
        $this->NS1 = $NSX;
    }

    /**
     * @return mixed
     */
    public function getNS2()
    {
        return $this->NS2;
    }

    /**
     * @param mixed $NSX
     */
    public function setNS2($NSX)
    {
        $this->NS2 = $NSX;
    }

    /**
     * @return int
     */
    public function getRenewName()
    {
        return $this->RenewName;
    }

    /**
     * @param int $RenewName
     */
    public function setRenewName($RenewName)
    {
        $this->RenewName = $RenewName;
    }

    /**
     * @return int
     */
    public function getEmailNotify()
    {
        return $this->EmailNotify;
    }

    /**
     * @param int $EmailNotify
     */
    public function setEmailNotify($EmailNotify)
    {
        $this->EmailNotify = $EmailNotify;
    }

    /**
     * @return int
     */
    public function getQueueOrder()
    {
        return $this->QueueOrder;
    }

    /**
     * @param int $QueueOrder
     */
    public function setQueueOrder($QueueOrder)
    {
        $this->QueueOrder = $QueueOrder;
    }

    /**
     * @return int
     */
    public function getAllowQueuing()
    {
        return $this->AllowQueuing;
    }

    /**
     * @param int $AllowQueuing
     */
    public function setAllowQueuing($AllowQueuing)
    {
        $this->AllowQueuing = $AllowQueuing;
    }

    /**
     * @return string
     */
    public function getIgnoreNSFail()
    {
        return $this->IgnoreNSFail;
    }

    /**
     * @param string $IgnoreNSFail
     */
    public function setIgnoreNSFail($IgnoreNSFail)
    {
        $this->IgnoreNSFail = $IgnoreNSFail;
    }

    /**
     * @return string
     */
    public function getUseWireTransfer()
    {
        return $this->UseWireTransfer;
    }

    /**
     * @param string $UseWireTransfer
     */
    public function setUseWireTransfer($UseWireTransfer)
    {
        $this->UseWireTransfer = $UseWireTransfer;
    }

    /**
     * @return mixed
     */
    public function getRegistrantFirstName()
    {
        return $this->RegistrantFirstName;
    }

    /**
     * @param mixed $RegistrantFirstName
     */
    public function setRegistrantFirstName($RegistrantFirstName)
    {
        $this->RegistrantFirstName = $RegistrantFirstName;
    }

    /**
     * @return mixed
     */
    public function getRegistrantLastName()
    {
        return $this->RegistrantLastName;
    }

    /**
     * @param mixed $RegistrantLastName
     */
    public function setRegistrantLastName($RegistrantLastName)
    {
        $this->RegistrantLastName = $RegistrantLastName;
    }

    /**
     * @return mixed
     */
    public function getRegistrantOrganizationName()
    {
        return $this->RegistrantOrganizationName;
    }

    /**
     * @param mixed $RegistrantOrganizationName
     */
    public function setRegistrantOrganizationName($RegistrantOrganizationName)
    {
        $this->RegistrantOrganizationName = $RegistrantOrganizationName;
    }

    /**
     * @return mixed
     */
    public function getRegistrantJobTitle()
    {
        return $this->RegistrantJobTitle;
    }

    /**
     * @param mixed $RegistrantJobTitle
     */
    public function setRegistrantJobTitle($RegistrantJobTitle)
    {
        $this->RegistrantJobTitle = $RegistrantJobTitle;
    }

    /**
     * @return mixed
     */
    public function getRegistrantAddress1()
    {
        return $this->RegistrantAddress1;
    }

    /**
     * @param mixed $RegistrantAddress1
     */
    public function setRegistrantAddress1($RegistrantAddress1)
    {
        $this->RegistrantAddress1 = $RegistrantAddress1;
    }

    /**
     * @return mixed
     */
    public function getRegistrantAddress2()
    {
        return $this->RegistrantAddress2;
    }

    /**
     * @param mixed $RegistrantAddress2
     */
    public function setRegistrantAddress2($RegistrantAddress2)
    {
        $this->RegistrantAddress2 = $RegistrantAddress2;
    }

    /**
     * @return mixed
     */
    public function getRegistrantCity()
    {
        return $this->RegistrantCity;
    }

    /**
     * @param mixed $RegistrantCity
     */
    public function setRegistrantCity($RegistrantCity)
    {
        $this->RegistrantCity = $RegistrantCity;
    }

    /**
     * @return string
     */
    public function getRegistrantStateProvinceChoice()
    {
        return $this->RegistrantStateProvinceChoice;
    }

    /**
     * @param string $RegistrantStateProvinceChoice
     */
    public function setRegistrantStateProvinceChoice($RegistrantStateProvinceChoice)
    {
        $this->RegistrantStateProvinceChoice = $RegistrantStateProvinceChoice;
    }

    /**
     * @return mixed
     */
    public function getRegistrantStateProvince()
    {
        return $this->RegistrantStateProvince;
    }

    /**
     * @param mixed $RegistrantStateProvince
     */
    public function setRegistrantStateProvince($RegistrantStateProvince)
    {
        $this->RegistrantStateProvince = $RegistrantStateProvince;
    }

    /**
     * @return mixed
     */
    public function getRegistrantPostalCode()
    {
        return $this->RegistrantPostalCode;
    }

    /**
     * @param mixed $RegistrantPostalCode
     */
    public function setRegistrantPostalCode($RegistrantPostalCode)
    {
        $this->RegistrantPostalCode = $RegistrantPostalCode;
    }

    /**
     * @return mixed
     */
    public function getRegistrantCountry()
    {
        return $this->RegistrantCountry;
    }

    /**
     * @param mixed $RegistrantCountry
     */
    public function setRegistrantCountry($RegistrantCountry)
    {
        $this->RegistrantCountry = $RegistrantCountry;
    }

    /**
     * @return mixed
     */
    public function getRegistrantEmailAddress()
    {
        return $this->RegistrantEmailAddress;
    }

    /**
     * @param mixed $RegistrantEmailAddress
     */
    public function setRegistrantEmailAddress($RegistrantEmailAddress)
    {
        $this->RegistrantEmailAddress = $RegistrantEmailAddress;
    }

    /**
     * @return mixed
     */
    public function getRegistrantPhone()
    {
        return $this->RegistrantPhone;
    }

    /**
     * @param mixed $RegistrantPhone
     */
    public function setRegistrantPhone($RegistrantPhone)
    {
        $this->RegistrantPhone = $RegistrantPhone;
    }

    /**
     * @return mixed
     */
    public function getRegistrantFax()
    {
        return $this->RegistrantFax;
    }

    /**
     * @param mixed $RegistrantFax
     */
    public function setRegistrantFax($RegistrantFax)
    {
        $this->RegistrantFax = $RegistrantFax;
    }


    /**
     * @param $ContactType
     */
    public function copyRegistrationInfoTo($ContactType)
    {
        switch($ContactType) {
            case 'REGISTRANT':
                $contactTypeKey = 'Registrant';
                break;
            case 'AUXBILLING':
                $contactTypeKey = 'AuxBilling';
                break;
            case 'TECH':
                $contactTypeKey = 'Tech';
                break;
            case 'ADMIN':
                $contactTypeKey = 'Admin';
                break;
        }

        $fields = array(
            'FirstName',
            'LastName',
            'OrganizationName',
            'JobTitle',
            'Address1',
            'Address2',
            'City',
            'StateProvinceChoice',
            'StateProvince',
            'PostalCode',
            'Country',
            'EmailAddress',
            'Phone'
        );



        foreach($fields as $field) {
            $index = $contactTypeKey . $field;

            $regKey = 'Registrant' . $field;
            $this->$index = $this->$regKey;
        }
    }


    public function getParams()
    {
        $properties = get_object_vars($this);

        $params = array();

        foreach($properties as $key => $property) {
            if (!empty($property)) {
                $params[$key] = $property;
            }
        }

        return $params;
    }

}


