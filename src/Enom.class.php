<?php
namespace CodifyLLC\EnomApi;

include(dirname(__FILE__) . '/EnomHelpers.class.php');
include(dirname(__FILE__) . '/ContactModel.class.php');
include(dirname(__FILE__) . '/purchaseModel.class.php');

class Enom {
    private $UID;
    private $PW;
    private $command;
    private $params;
    private $baseUrl;
    private $debug;
    private $ResponseType;

    public function __construct($UID, $PW, $baseUrl='http://resellertest.enom.com/interface.asp') {
        $this->UID = $UID;
        $this->PW = $PW;
        $this->params = array();
        $this->baseUrl = $baseUrl;
        $this->debug = false;
        $this->ResponseType = 'xml';
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * @param string $baseUrl
     */
    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function setLive() {
        $this->setBaseUrl('https://reseller.enom.com/interface.asp');
    }

    /**
     * @return mixed
     */
    public function getUID()
    {
        return $this->UID;
    }

    /**
     * @param mixed $UID
     */
    public function setUID($UID)
    {
        $this->UID = $UID;
    }

    /**
     * @return mixed
     */
    public function getPW()
    {
        return $this->PW;
    }

    /**
     * @param mixed $PW
     */
    public function setPW($PW)
    {
        $this->PW = $PW;
    }

    /**
     * @return mixed
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param mixed $command
     */
    public function setCommand($command)
    {
        $this->command = $command;
    }

    /**
     * @return string
     */
    public function getResponseType()
    {
        return $this->ResponseType;
    }

    /**
     * @param string $ResponseType
     */
    public function setResponseType($ResponseType)
    {
        $this->ResponseType = $ResponseType;
    }



    /**
     * @param $key
     * @param $val
     */
    public function setParam($key, $val)
    {
        $this->params[$key] = $val;
    }

    /**
     * @param $key
     * @return string
     */
    public function getParam($key)
    {
        return (isset($this->params[$key])) ? ($this->params[$key]) : ('');
    }

    public function debugOn()
    {
        $this->debug = true;
    }

    public function send()
    {
        $this->setParam('UID', $this->getUID());
        $this->setParam('PW', $this->getPW());
        $this->setParam('Command', $this->getCommand());
        $this->setParam('ResponseType', $this->getResponseType());

        $queryString = '';
        foreach($this->params as $key => $param) {
            $queryString .=  $key . '=' . rawurlencode($param) . '&';
        }
        $queryString = substr($queryString, 0, -1);

        $url = $this->baseUrl . '?' . $queryString;

        if ($this->debug === true) {
            print "URL: " . $url;
            print "\n\n";
        }

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);

        if ($this->debug) {
            // CURLOPT_VERBOSE: TRUE to output verbose information. Writes output to STDERR,
            // or the file specified using CURLOPT_STDERR.
            curl_setopt($ch, CURLOPT_VERBOSE, true);

            $verbose = fopen('php://temp', 'rw+');
            curl_setopt($ch, CURLOPT_STDERR, $verbose);

        }

        $output=curl_exec($ch);

        curl_close($ch);

        if ($this->debug === true) {
            rewind($verbose);
            $verboseLog = stream_get_contents($verbose);


            $debugFile = dirname(__FILE__) . "/../enomLog.txt";
            file_put_contents($debugFile, "Verbose information:\n" . $verboseLog . "\n", FILE_APPEND);
        }
        $response = simplexml_load_string($output);

        return $response;
    }
}