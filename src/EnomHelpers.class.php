<?php
namespace CodifyLLC\EnomApi;
use CodifyLLC\EnomApi\Enom AS Enom;

class EnomHelpers extends Enom {


    /**
     * Checks if the given domain name is taken or available
     * @param $domain
     * @return mixed
     */
    public function checkDomain($domain)
    {
        $this->setCommand('Check');

        $domainParts = $this->parseDomainName($domain);
        $this->setParam('SLD', $domainParts['SLD']);
        $this->setParam('TLD', $domainParts['TLD']);

        return $this->send();
    }

    /**
     * Gets the domain's Whois information
     * @param $domain
     * @return mixed
     */
    public function GetWhoisContact($domain)
    {
        $this->setCommand('GetWhoisContact');

        $domainParts = $this->parseDomainName($domain);
        $this->setParam('SLD', $domainParts['SLD']);
        $this->setParam('TLD', $domainParts['TLD']);

        return $this->send();
    }

    /**
     * Get the domains for the account
     * @return mixed
     */
    public function GetDomains()
    {
        $this->setCommand('GetDomains');

        return $this->send();
    }


    /**
     * Updates contacts for a domain
     * @string $domain The domain name. Example google.com
     * @object Contact The contact object
     * @return mixed
     */
    public function Contacts($domain, Contact $Contact)
    {
        $this->setCommand('Contacts');

        $domainParts = $this->parseDomainName($domain);
        $this->setParam('SLD', $domainParts['SLD']);
        $this->setParam('TLD', $domainParts['TLD']);

        foreach($Contact->getParams() as $key => $property) {
            $this->setParam($key, $property);
        }

        return $this->send();
    }

    /**
     * Get the domains for the account
     * @return mixed
     */
    public function Purchase($domain, Purchase $purchaseModel)
    {
        $this->setCommand('Purchase');

        $domainParts = $this->parseDomainName($domain);

        $purchaseModel->setSLD($domainParts['SLD']);
        $purchaseModel->setTLD($domainParts['TLD']);

        foreach($purchaseModel->getParams() as $key => $property) {
            $this->setParam($key, $property);
        }


        return $this->send();
    }


    public function getDomainWholesalPrice($ProductType, $extension)
    {
        $this->setCommand('PE_GetProductPrice');

        $this->setParam('ProductType', $ProductType);
        $this->setParam('tld', $extension);

        return $this->send();
    }


    /**
     * @param $domain
     * @return array
     */
    public function parseDomainName($domain)
    {
        $domainParts = explode('.', $domain);

        if (count($domainParts) > 0) {
            $extension = end($domainParts);

            $lastKey = count($domainParts)-1;
            $domainNameKey = $lastKey-1;
            $domain  = $domainParts[$domainNameKey];

            return array('SLD'=>$domain, 'TLD'=>$extension);
        }


        return array('SLD'=>$domain, 'TLD'=>'');
    }


}