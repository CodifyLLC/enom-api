<?php
namespace CodifyLLC\EnomApi;

class Contact {
    /**
     * @var string
     * Type of contact to add/update.
     * Options are REGISTRANT, AUXBILLING, TECH, ADMIN
     */
    public $ContactType;

    /**
     * @var string
     * @required
     */
    public $ContactTypeFirstName;

    /**
     * @var string
     * @required
     */
    public $ContactTypeLastName;

    /**
     * @var string
     * @required
     */
    public $ContactTypeOrganizationName;
    public $ContactTypeJobTitle;

    /**
     * @var string
     * @required
     */
    public $ContactTypeAddress1;
    public $ContactTypeAddress2;

    /**
     * @var string
     * @required
     */
    public $ContactTypeCity;

    /**
     * @var string
     * State or province choice of
     * ContactType contact. Permitted
     * values are: S State, P Province
     */
    public $ContactTypeStateProvinceChoice;

    public $ContactTypeStateProvince;

    /**
     * @var string
     * @required for .org
     */
    public $ContactTypePostalCode;

    /**
     * @var string
     * @required
     */
    public $ContactTypeCountry;

    /**
     * @var string
     * @required
     */
    public $ContactTypeEmailAddress;

    /**
     * @var string
     * @required
     */
    public $ContactTypePhone;
    public $ContactTypePhoneExt;
    public $ContactTypeFax;
    public $ExtendedAttributes;

    /**
     * @return string
     */
    public function getContactType()
    {
        return $this->ContactType;
    }

    /**
     * @param string $ContactType
     */
    public function setContactType($ContactType)
    {
        $this->ContactType = $ContactType;
    }

    /**
     * @return string
     */
    public function getContactTypeFirstName()
    {
        return $this->ContactTypeFirstName;
    }

    /**
     * @param string $ContactTypeFirstName
     */
    public function setContactTypeFirstName($ContactTypeFirstName)
    {
        $this->ContactTypeFirstName = $ContactTypeFirstName;
    }

    /**
     * @return string
     */
    public function getContactTypeLastName()
    {
        return $this->ContactTypeLastName;
    }

    /**
     * @param string $ContactTypeLastName
     */
    public function setContactTypeLastName($ContactTypeLastName)
    {
        $this->ContactTypeLastName = $ContactTypeLastName;
    }

    /**
     * @return string
     */
    public function getContactTypeOrganizationName()
    {
        return $this->ContactTypeOrganizationName;
    }

    /**
     * @param string $ContactTypeOrganizationName
     */
    public function setContactTypeOrganizationName($ContactTypeOrganizationName)
    {
        $this->ContactTypeOrganizationName = $ContactTypeOrganizationName;
    }

    /**
     * @return mixed
     */
    public function getContactTypeJobTitle()
    {
        return $this->ContactTypeJobTitle;
    }

    /**
     * @param mixed $ContactTypeJobTitle
     */
    public function setContactTypeJobTitle($ContactTypeJobTitle)
    {
        $this->ContactTypeJobTitle = $ContactTypeJobTitle;
    }

    /**
     * @return string
     */
    public function getContactTypeAddress1()
    {
        return $this->ContactTypeAddress1;
    }

    /**
     * @param string $ContactTypeAddress1
     */
    public function setContactTypeAddress1($ContactTypeAddress1)
    {
        $this->ContactTypeAddress1 = $ContactTypeAddress1;
    }

    /**
     * @return mixed
     */
    public function getContactTypeAddress2()
    {
        return $this->ContactTypeAddress2;
    }

    /**
     * @param mixed $ContactTypeAddress2
     */
    public function setContactTypeAddress2($ContactTypeAddress2)
    {
        $this->ContactTypeAddress2 = $ContactTypeAddress2;
    }

    /**
     * @return string
     */
    public function getContactTypeCity()
    {
        return $this->ContactTypeCity;
    }

    /**
     * @param string $ContactTypeCity
     */
    public function setContactTypeCity($ContactTypeCity)
    {
        $this->ContactTypeCity = $ContactTypeCity;
    }

    /**
     * @return string
     */
    public function getContactTypeStateProvinceChoice()
    {
        return $this->ContactTypeStateProvinceChoice;
    }

    /**
     * @param string $ContactTypeStateProvinceChoice
     */
    public function setContactTypeStateProvinceChoice($ContactTypeStateProvinceChoice)
    {
        $this->ContactTypeStateProvinceChoice = $ContactTypeStateProvinceChoice;
    }

    /**
     * @return mixed
     */
    public function getContactTypeStateProvince()
    {
        return $this->ContactTypeStateProvince;
    }

    /**
     * @param mixed $ContactTypeStateProvince
     */
    public function setContactTypeStateProvince($ContactTypeStateProvince)
    {
        $this->ContactTypeStateProvince = $ContactTypeStateProvince;
    }

    /**
     * @return string
     */
    public function getContactTypePostalCode()
    {
        return $this->ContactTypePostalCode;
    }

    /**
     * @param string $ContactTypePostalCode
     */
    public function setContactTypePostalCode($ContactTypePostalCode)
    {
        $this->ContactTypePostalCode = $ContactTypePostalCode;
    }

    /**
     * @return string
     */
    public function getContactTypeCountry()
    {
        return $this->ContactTypeCountry;
    }

    /**
     * @param string $ContactTypeCountry
     */
    public function setContactTypeCountry($ContactTypeCountry)
    {
        $this->ContactTypeCountry = $ContactTypeCountry;
    }

    /**
     * @return string
     */
    public function getContactTypeEmailAddress()
    {
        return $this->ContactTypeEmailAddress;
    }

    /**
     * @param string $ContactTypeEmailAddress
     */
    public function setContactTypeEmailAddress($ContactTypeEmailAddress)
    {
        $this->ContactTypeEmailAddress = $ContactTypeEmailAddress;
    }

    /**
     * @return string
     */
    public function getContactTypePhone()
    {
        return $this->ContactTypePhone;
    }

    /**
     * @param string $ContactTypePhone
     */
    public function setContactTypePhone($ContactTypePhone)
    {
        $this->ContactTypePhone = $ContactTypePhone;
    }

    /**
     * @return mixed
     */
    public function getContactTypePhoneExt()
    {
        return $this->ContactTypePhoneExt;
    }

    /**
     * @param mixed $ContactTypePhoneExt
     */
    public function setContactTypePhoneExt($ContactTypePhoneExt)
    {
        $this->ContactTypePhoneExt = $ContactTypePhoneExt;
    }

    /**
     * @return mixed
     */
    public function getContactTypeFax()
    {
        return $this->ContactTypeFax;
    }

    /**
     * @param mixed $ContactTypeFax
     */
    public function setContactTypeFax($ContactTypeFax)
    {
        $this->ContactTypeFax = $ContactTypeFax;
    }

    /**
     * @return mixed
     */
    public function getExtendedAttributes()
    {
        return $this->ExtendedAttributes;
    }

    /**
     * @param mixed $ExtendedAttributes
     */
    public function setExtendedAttributes($ExtendedAttributes)
    {
        $this->ExtendedAttributes = $ExtendedAttributes;
    }


    public function getParams()
    {
        $properties = get_object_vars($this);

        $params = array();
        switch($this->ContactType) {
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
        foreach($properties as $key => $property) {
            if ($key != 'ContactType') {
                $newKey = str_replace('ContactType', $contactTypeKey, $key);
            }
            else {
                $newKey = $key;
            }

            $params[$newKey] = $property;
        }

        return $params;
    }
}