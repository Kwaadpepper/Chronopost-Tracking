<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/tracking-cxf/TrackingServiceWS?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \ChronopostTracking\ClassMap::get(),
];
/**
 * Samples for Cancel ServiceType
 */
$cancel = new \ChronopostTracking\ServiceType\Cancel($options);
/**
 * Sample call for cancelListSkybill operation/method
 */
if ($cancel->cancelListSkybill(new \ChronopostTracking\StructType\CancelListSkybill()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Sample call for cancelSkybill operation/method
 */
if ($cancel->cancelSkybill(new \ChronopostTracking\StructType\CancelSkybill()) !== false) {
    print_r($cancel->getResult());
} else {
    print_r($cancel->getLastError());
}
/**
 * Samples for Track ServiceType
 */
$track = new \ChronopostTracking\ServiceType\Track($options);
/**
 * Sample call for trackESD operation/method
 */
if ($track->trackESD(new \ChronopostTracking\StructType\TrackESD()) !== false) {
    print_r($track->getResult());
} else {
    print_r($track->getLastError());
}
/**
 * Sample call for trackSearch operation/method
 */
if ($track->trackSearch(new \ChronopostTracking\StructType\TrackSearch()) !== false) {
    print_r($track->getResult());
} else {
    print_r($track->getLastError());
}
/**
 * Sample call for trackWithSenderRef operation/method
 */
if ($track->trackWithSenderRef(new \ChronopostTracking\StructType\TrackWithSenderRef()) !== false) {
    print_r($track->getResult());
} else {
    print_r($track->getLastError());
}
/**
 * Sample call for trackSkybillV2 operation/method
 */
if ($track->trackSkybillV2(new \ChronopostTracking\StructType\TrackSkybillV2()) !== false) {
    print_r($track->getResult());
} else {
    print_r($track->getLastError());
}
/**
 * Sample call for trackSkybill operation/method
 */
if ($track->trackSkybill(new \ChronopostTracking\StructType\TrackSkybill()) !== false) {
    print_r($track->getResult());
} else {
    print_r($track->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \ChronopostTracking\ServiceType\Search($options);
/**
 * Sample call for searchPOD operation/method
 */
if ($search->searchPOD(new \ChronopostTracking\StructType\SearchPOD()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
/**
 * Sample call for searchPODWithSenderRef operation/method
 */
if ($search->searchPODWithSenderRef(new \ChronopostTracking\StructType\SearchPODWithSenderRef()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
