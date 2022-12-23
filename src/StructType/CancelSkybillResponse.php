<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for cancelSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:cancelSkybillResponse
 * @subpackage Structs
 */
class CancelSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultCancelSkybill|null
     */
    protected ?\StructType\ResultCancelSkybill $return = null;
    /**
     * Constructor method for cancelSkybillResponse
     * @uses CancelSkybillResponse::setReturn()
     * @param \StructType\ResultCancelSkybill $return
     */
    public function __construct(?\StructType\ResultCancelSkybill $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultCancelSkybill|null
     */
    public function getReturn(): ?\StructType\ResultCancelSkybill
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultCancelSkybill $return
     * @return \StructType\CancelSkybillResponse
     */
    public function setReturn(?\StructType\ResultCancelSkybill $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
