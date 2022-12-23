<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchPODWithSenderRefResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchPODWithSenderRefResponse
 * @subpackage Structs
 */
class SearchPODWithSenderRefResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ResultSearchPODWithSenderRef|null
     */
    protected ?\StructType\ResultSearchPODWithSenderRef $return = null;
    /**
     * Constructor method for searchPODWithSenderRefResponse
     * @uses SearchPODWithSenderRefResponse::setReturn()
     * @param \StructType\ResultSearchPODWithSenderRef $return
     */
    public function __construct(?\StructType\ResultSearchPODWithSenderRef $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ResultSearchPODWithSenderRef|null
     */
    public function getReturn(): ?\StructType\ResultSearchPODWithSenderRef
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ResultSearchPODWithSenderRef $return
     * @return \StructType\SearchPODWithSenderRefResponse
     */
    public function setReturn(?\StructType\ResultSearchPODWithSenderRef $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
