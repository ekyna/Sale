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
     * Returns the base price.
     * 
     * @return float
     */
    public function getPrice();

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
     * Returns the tax.
     */
    public function getTax();
}
