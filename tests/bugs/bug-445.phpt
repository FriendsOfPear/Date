<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4 foldmethod=marker: */
// CVS: $Id$
?>
--TEST--
Bug #445: Date does not handle DATE_FORMAT_ISO_EXTENDED correctly
--FILE--
<?php
/**
 * Test for: Date
 * Parts tested: DATE_FORMAT_ISO_EXTENDED constant
 */

require_once 'Date.php';

$input = '2003-12-17T10:27:03Z';
$date = new Date('2003-12-17T10:27:03Z');
echo 'Date::getMonth() (via Constructor) = ' . $date->getMonth() . "\n";

$date = new Date();
$date->setDate($input, DATE_FORMAT_ISO_EXTENDED);
echo 'Date::getMonth() (via Date::setDate()) = ' . $date->getMonth() . "\n";
?>
--EXPECT--
Date::getMonth() (via Constructor) = 12
Date::getMonth() (via Date::setDate()) = 12
<?php
/*
 * Local variables:
 * mode: php
 * tab-width: 4
 * c-basic-offset: 4
 * c-hanging-comment-ender-p: nil
 * End:
 */
?>