<?php

declare(strict_types=1);

namespace ChronopostTracking\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Track ServiceType
 * @subpackage Services
 */
class Track extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named trackESD
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostTracking\StructType\TrackESD $parameters
     * @return \ChronopostTracking\StructType\TrackESDResponse|bool
     */
    public function trackESD(\ChronopostTracking\StructType\TrackESD $parameters)
    {
        try {
            $this->setResult($resultTrackESD = $this->getSoapClient()->__soapCall('trackESD', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackESD;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSearch
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostTracking\StructType\TrackSearch $parameters
     * @return \ChronopostTracking\StructType\TrackSearchResponse|bool
     */
    public function trackSearch(\ChronopostTracking\StructType\TrackSearch $parameters)
    {
        try {
            $this->setResult($resultTrackSearch = $this->getSoapClient()->__soapCall('trackSearch', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackSearch;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackWithSenderRef
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostTracking\StructType\TrackWithSenderRef $parameters
     * @return \ChronopostTracking\StructType\TrackWithSenderRefResponse|bool
     */
    public function trackWithSenderRef(\ChronopostTracking\StructType\TrackWithSenderRef $parameters)
    {
        try {
            $this->setResult($resultTrackWithSenderRef = $this->getSoapClient()->__soapCall('trackWithSenderRef', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackWithSenderRef;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSkybillV2
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostTracking\StructType\TrackSkybillV2 $parameters
     * @return \ChronopostTracking\StructType\TrackSkybillV2Response|bool
     */
    public function trackSkybillV2(\ChronopostTracking\StructType\TrackSkybillV2 $parameters)
    {
        try {
            $this->setResult($resultTrackSkybillV2 = $this->getSoapClient()->__soapCall('trackSkybillV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackSkybillV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named trackSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostTracking\StructType\TrackSkybill $parameters
     * @return \ChronopostTracking\StructType\TrackSkybillResponse|bool
     */
    public function trackSkybill(\ChronopostTracking\StructType\TrackSkybill $parameters)
    {
        try {
            $this->setResult($resultTrackSkybill = $this->getSoapClient()->__soapCall('trackSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTrackSkybill;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostTracking\StructType\TrackESDResponse|\ChronopostTracking\StructType\TrackSearchResponse|\ChronopostTracking\StructType\TrackSkybillResponse|\ChronopostTracking\StructType\TrackSkybillV2Response|\ChronopostTracking\StructType\TrackWithSenderRefResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
