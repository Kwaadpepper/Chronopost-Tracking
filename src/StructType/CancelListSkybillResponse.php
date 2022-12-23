<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelListSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelListSkybillResponse
 * @subpackage Structs
 */
class CancelListSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultListCancelSkybill|null
     */
    protected ?\StructType\ResultListCancelSkybill $return = null;
    /**
     * Constructor method for cancelListSkybillResponse
     * @uses CancelListSkybillResponse::setReturn()
     * @param \StructType\ResultListCancelSkybill $return
     */
    public function __construct(?\StructType\ResultListCancelSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultListCancelSkybill|null
     */
    public function getReturn(): ?\StructType\ResultListCancelSkybill
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultListCancelSkybill $return
     * @return \StructType\CancelListSkybillResponse
     */
    public function setReturn(?\StructType\ResultListCancelSkybill $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
