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

$Contact = new \CodifyLLC\EnomApi\Contact();
$Contact->setContactType('REGISTRANT');
$Contact->setContactTypeFirstName('The');
$Contact->setContactTypeLastName('Codify');
$Contact->setContactTypeOrganizationName('Codify, LLC');
$Contact->setContactTypeEmailAddress('domains@thecodify.com');
$Contact->setContactTypeAddress1('123 Main Str');
$Contact->setContactTypePostalCode(55555);
$Contact->setContactTypeCity('Main Town');
$Contact->setContactTypeCountry('USA');
$Contact->setContactTypePhone('6165551212');

$response = $enom->Contacts('restaurants-in-grand-rapids.com', $Contact);

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

print_r($response);

print "\n\n";
