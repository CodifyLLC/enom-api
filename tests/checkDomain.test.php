<?php
use CodifyLLC\EnomApi;

include('../src/Enom.class.php');

// Include the logins file
include('logins.php');

$enom = new CodifyLLC\EnomApi\EnomHelpers(ENOM_USERNAME, ENOM_PASSWORD);

if (ENOM_MODE == 'live') {
    $enom->setLive();
}
else {
    $enom->debugOn();
}

$response = $enom->checkDomain('testingcooldomain.com');

print 'error count = ' . $response->ErrCount . "\n";
if (empty($response->ErrCount)) {
    print "No Errors, continue on...\n";
}
else {
    print "Errors!\n\n";

    $errors = get_object_vars($response->errors);
    foreach($errors as $key => $error) {
        print $error . "\n";
    }
}

switch($response->RRPCode) {
    case 210:
        print "Domain Name available!";
        break;

    case 211:
        print "Domain Name NOT available!";
        break;

    default:
        print "Something else going on.. text response is: " . $response->RRPText . "!";
        break;
}

print "\n\n";

print_r($response);
