<?php

namespace Ekyna\Component\Sale;

/**
 * Interface PriceableInterface
 * @package Ekyna\Component\Sale
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface PriceableInterface
{
    /**
     * Sets the base price.
     *
     * @param number $price
     *
     * @return \Ekyna\Component\Sale\PriceableInterface|$this
     */
    public function setPrice($price);

    /**
     * Returns the base price.
     * 
     * @return float
     */
    public function getPrice();

    /**
     * Returns the "all taxes excluded" price.
     *
     * @return float
     */
    public function getNetPrice();

    /**
     * Returns the "all taxes included" price.
     * 
     * @return float
     */
    public function getAtiPrice();

    /**
     * Returns the tax amount.
     * 
     * @return float
     */
    public function getTaxAmount();

    /**
     * Returns the taxes amounts.
     * 
     * @return array
     */
    public function getTaxesAmounts();

    /**
     * Sets the tax.
     *
     * @param \Ekyna\Component\Sale\TaxInterface $tax
     *
     * @return \Ekyna\Component\Sale\PriceableInterface|$this
     */
    public function setTax(TaxInterface $tax);

    /**
     * Returns the tax.
     */
    public function getTax();
}
