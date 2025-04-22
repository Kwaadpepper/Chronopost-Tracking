<?php

declare(strict_types=1);

namespace ChronopostTracking\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancel ServiceType
 * @subpackage Services
 */
class Cancel extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named cancelListSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostTracking\StructType\CancelListSkybill $parameters
     * @return \ChronopostTracking\StructType\CancelListSkybillResponse|bool
     */
    public function cancelListSkybill(\ChronopostTracking\StructType\CancelListSkybill $parameters)
    {
        try {
            $this->setResult($resultCancelListSkybill = $this->getSoapClient()->__soapCall('cancelListSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelListSkybill;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named cancelSkybill
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ChronopostTracking\StructType\CancelSkybill $parameters
     * @return \ChronopostTracking\StructType\CancelSkybillResponse|bool
     */
    public function cancelSkybill(\ChronopostTracking\StructType\CancelSkybill $parameters)
    {
        try {
            $this->setResult($resultCancelSkybill = $this->getSoapClient()->__soapCall('cancelSkybill', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelSkybill;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ChronopostTracking\StructType\CancelListSkybillResponse|\ChronopostTracking\StructType\CancelSkybillResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
