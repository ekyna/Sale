<?php

namespace Ekyna\Component\Sale;

class TaxAmount
{
    /**
     * @var TaxInterface
     */
    protected $tax;

    /**
     * @var float
     */
    protected $amount;

    /**
     * Constructor
     * 
     * @param TaxInterface $tax
     * @param float        $amount
     */
    public function __construct(TaxInterface $tax, $amount = 0)
    {
        $this->tax = $tax;
        $this->amount = $amount;
    }

    /**
     * Returns the tax.
     * 
     * @return \Ekyna\Component\Sale\TaxInterface
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Returns the tax name.
     * 
     * @return string
     */
    public function getName()
    {
        return $this->tax->getName();
    }

    /**
     * Adds an amount.
     * 
     * @param float $amount
     */
    public function addAmount($amount)
    {
        $this->amount += floatval($amount);
    }

    /**
     * Returns the amount.
     * 
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
