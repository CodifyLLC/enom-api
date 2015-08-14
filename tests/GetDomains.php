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

$response = $enom->GetDomains();

print_r($response);

print 'error count = ' . $response->ErrCount . "\n";
if (!empty($response->ErrCount)) {
    print "Errors!\n\n";

    $errors = get_object_vars($response->errors);
    foreach($errors as $key => $error) {
        print $error . "\n";
    }

    exit;
}

print "\n";
print "Domains: \n";

$listKey = 'domain-list';
foreach($response->GetDomains->$listKey->domain as $index => $domain) {
    print $domain->sld . '.' . $domain->tld . "\n";
}


print "\n\n";

