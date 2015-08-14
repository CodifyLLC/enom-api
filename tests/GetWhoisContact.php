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

$response = $enom->GetWhoisContact('bannersonthefly.com');

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

        foreach($response->GetWhoisContacts->contacts->contact as $index => $contact) {
            $attributes = $contact->attributes();

            print "Contact Type: " . $attributes->ContactType . "\n";

            print "Organization: " . $contact->Organization . "\n";

            print "Name: " . $contact->FName . " " . $contact->LName . "\n";

            print "Address:\n";
            print $contact->Address1 . "\n";
            print $contact->Address2 . "\n";

            print "City: " . $contact->City . "\n";

            print "\n\n";
        }

        print "\n";
        break;

    default:

        break;
}

print "\n\n";
