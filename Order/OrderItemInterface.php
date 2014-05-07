<?php

namespace Ekyna\Component\Sale\Order;

use Ekyna\Component\Sale\PriceableInterface;
use Ekyna\Component\Sale\ReferenceableInterface;
use Ekyna\Component\Sale\WeighableInterface;

/**
 * OrderItemInterface.
 * 
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OrderItemInterface extends PriceableInterface, ReferenceableInterface, WeighableInterface
{
    /**
     * Returns the quantity.
     *
     * @return integer
     */
    public function getQuantity();

    /**
     * Returns the position.
     *
     * @return integer
     */
    public function getPosition();

    /**
     * Returns the order.
     *
     * @return \Ekyna\Bundle\OrderBundle\Model\OrderInterface
     */
    public function getOrder();

    /**
     * Returns the product.
     *
     * @return \Ekyna\Bundle\ProductBundle\Model\ProductInterface
     */
    public function getProduct();

    /**
     * Returns the options.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOptions();

    /**
     * Returns the options's identifiers.
     * 
     * @return array
     */
    public function getOptionsIds();

    /**
     * Returns whether the OrderItem equals the given OrderItem or not.
     * 
     * @param \Ekyna\Bundle\OrderBundle\Model\OrderItemInterface $orderItem
     * 
     * @return boolean
     */
    public function equals(OrderItemInterface $orderItem);

    /**
     * Merge quantity of the given OrderItem.
     */
    public function merge(OrderItemInterface $orderItem);

    /**
     * Returns the "all taxes excluded" price (including options)
     *
     * @return float
     */
    public function getBaseNetPrice();

    /**
     * Returns the "all taxes included" price (including options)
     *
     * @return float
     */
    public function getBaseAtiPrice();

    /**
     * Returns the tax amount (including options)
     *
     * @return float
     */
    public function getBaseTaxAmount();

    /**
     * Returns the weight (including options)
     *
     * @return float
     */
    public function getBaseWeight();

    /**
     * Returns the total "all taxes excluded" price.
     *
     * @return float
     */
    public function getTotalNetPrice();

    /**
     * Returns the total "all taxes included" price
     *
     * @return float
     */
    public function getTotalAtiPrice();

    /**
     * Returns the total tax amount
     *
     * @return float
     */
    public function getTotalTaxAmount();

    /**
     * Returns the total tax amount
     *
     * @return \Ekyna\Component\Sale\TaxesAmount
     */
    public function getTotalTaxesAmounts();

    /**
     * Returns the total weight.
     *
     * @return float
     */
    public function getTotalWeight();
}
