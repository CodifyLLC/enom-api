<?php

define('LIVE_USERNAME', '');
define('LIVE_PASSWORD', '');

define('TEST_USERNAME', '');
define('TEST_PASSWORD', '');

define('ENOM_MODE', 'test'); // 'test' or 'live'


//----------------------------------------------------
// Do not modify below this line
//----------------------------------------------------
switch(ENOM_MODE) {
    case 'test':
        define('ENOM_USERNAME', TEST_USERNAME);
        define('ENOM_PASSWORD', TEST_PASSWORD);
        break;

    case 'live':
        define('ENOM_USERNAME', LIVE_USERNAME);
        define('ENOM_PASSWORD', LIVE_PASSWORD);
        break;
}