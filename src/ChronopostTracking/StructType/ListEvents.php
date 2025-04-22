<?php

declare(strict_types=1);

namespace ChronopostTracking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for listEvents StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListEvents extends AbstractStructBase
{
    /**
     * The skybillNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $skybillNumber = null;
    /**
     * The events
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ChronopostTracking\StructType\Event[]
     */
    protected ?array $events = null;
    /**
     * Constructor method for listEvents
     * @uses ListEvents::setSkybillNumber()
     * @uses ListEvents::setEvents()
     * @param string $skybillNumber
     * @param \ChronopostTracking\StructType\Event[] $events
     */
    public function __construct(?string $skybillNumber = null, ?array $events = null)
    {
        $this
            ->setSkybillNumber($skybillNumber)
            ->setEvents($events);
    }
    /**
     * Get skybillNumber value
     * @return string|null
     */
    public function getSkybillNumber(): ?string
    {
        return $this->skybillNumber;
    }
    /**
     * Set skybillNumber value
     * @param string $skybillNumber
     * @return \ChronopostTracking\StructType\ListEvents
     */
    public function setSkybillNumber(?string $skybillNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($skybillNumber) && !is_string($skybillNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($skybillNumber, true), gettype($skybillNumber)), __LINE__);
        }
        $this->skybillNumber = $skybillNumber;
        
        return $this;
    }
    /**
     * Get events value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ChronopostTracking\StructType\Event[]
     */
    public function getEvents(): ?array
    {
        return $this->events ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setEvents method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEvents method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEventsForArrayConstraintFromSetEvents(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listEventsEventsItem) {
            // validation for constraint: itemType
            if (!$listEventsEventsItem instanceof \ChronopostTracking\StructType\Event) {
                $invalidValues[] = is_object($listEventsEventsItem) ? get_class($listEventsEventsItem) : sprintf('%s(%s)', gettype($listEventsEventsItem), var_export($listEventsEventsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The events property can only contain items of type \ChronopostTracking\StructType\Event, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set events value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ChronopostTracking\StructType\Event[] $events
     * @return \ChronopostTracking\StructType\ListEvents
     */
    public function setEvents(?array $events = null): self
    {
        // validation for constraint: array
        if ('' !== ($eventsArrayErrorMessage = self::validateEventsForArrayConstraintFromSetEvents($events))) {
            throw new InvalidArgumentException($eventsArrayErrorMessage, __LINE__);
        }
        if (is_null($events) || (is_array($events) && empty($events))) {
            unset($this->events);
        } else {
            $this->events = $events;
        }
        
        return $this;
    }
    /**
     * Add item to events value
     * @throws InvalidArgumentException
     * @param \ChronopostTracking\StructType\Event $item
     * @return \ChronopostTracking\StructType\ListEvents
     */
    public function addToEvents(\ChronopostTracking\StructType\Event $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ChronopostTracking\StructType\Event) {
            throw new InvalidArgumentException(sprintf('The events property can only contain items of type \ChronopostTracking\StructType\Event, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->events[] = $item;
        
        return $this;
    }
}
