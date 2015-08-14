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

$purchaseModel = new EnomApi\Purchase();
$purchaseModel->setRegistrantFirstName('Lucas');
$purchaseModel->setRegistrantLastName('Hoezee');
$purchaseModel->setRegistrantAddress1('915 Deer Valley Rd');
$purchaseModel->setRegistrantCity('Holly');
$purchaseModel->setRegistrantPostalCode(48442);
$purchaseModel->setRegistrantCountry('US');
$purchaseModel->setRegistrantStateProvince('MI');
$purchaseModel->setRegistrantStateProvinceChoice('S');
$purchaseModel->setRegistrantPhone('+1.6165551212');
$purchaseModel->setRegistrantEmailAddress('luke.hoezee@gmail.com');

$purchaseModel->copyRegistrationInfoTo('AUXBILLING');
$purchaseModel->copyRegistrationInfoTo('TECH');
$purchaseModel->copyRegistrationInfoTo('ADMIN');

$response = $enom->Purchase('4ctestupdated.com', $purchaseModel);

print 'response string = ' . $response . "\n";
print_r($response);

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
    case 200:
        print "Command Completed\n\n";

        print "Order ID: " . $response->OrderID;

        print "\n";
        break;

    default:

        break;
}

print "\n\n";

