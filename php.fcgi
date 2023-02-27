#!/bin/bash

PHP_INI_SCAN_DIR=/home/artrcfaw/.sh.phpmanager/php74.d
export PHP_INI_SCAN_DIR

DEFAULTPHPINI=/home/artrcfaw/BookUTravel.com/php74-fcgi.ini
exec /opt/cpanel/ea-php74/root/usr/bin/php-cgi -c ${DEFAULTPHPINI}
