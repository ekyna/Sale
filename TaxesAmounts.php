<?php

namespace Ekyna\Component\Sale;

/**
 * TaxesAmount.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
class TaxesAmounts implements \ArrayAccess, \IteratorAggregate
{
    /**
     * @var array
     */
    protected $taxes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->taxes = array();
    }

    /**
     * Adds a tax amount
     * 
     * @param TaxAmount $taxAmount
     */
    public function addTaxAmount(TaxAmount $taxAmount)
    {
        foreach ($this->taxes as $tax) {
            if ($tax->getTax() == $taxAmount->getTax()) {
                $tax->addAmount($taxAmount->getAmount());
                return;
            }
        }

        $this->taxes[] = $taxAmount;
    }

    /**
     * @param offset
     */
    public function offsetExists($offset)
    {
    	return array_key_exists($this->taxes, $offset);
    }

    /**
     * @param offset
     */
    public function offsetGet($offset)
    {
    	return $this->offsetExists($offset) ? $this->taxes[$offset] : null;
    }

    /**
     * @param offset
     * @param value
     */
    public function offsetSet($offset, $value)
    {
        if (! $value instanceOf TaxAmount) {
            throw new \InvalidArgumentException('Expected TaxAmount instance.');
        }
        
        $this->taxes[$offset] = $value;
    }

    /**
     * @param offset
     */
    public function offsetUnset($offset)
    {
        if ($this->offsetExists($offset)) {
    	   unset($this->taxes[$offset]);
        }
    }

    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->taxes);
    }

    /**
     * Merges two TaxesAmounts objects
     * 
     * @param TaxesAmounts $taxesAmoounts
     */
    public function merge(TaxesAmounts $taxesAmounts)
    {
        foreach($taxesAmounts as $taxAmount) {
            $this->addTaxAmount($taxAmount);
        }
    }
}
