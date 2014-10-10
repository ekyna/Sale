<?php

namespace Ekyna\Component\Sale\Order;

use Ekyna\Component\Sale\PriceableInterface;
use Ekyna\Component\Sale\Product\ProductInterface;
use Ekyna\Component\Sale\ReferenceableInterface;
use Ekyna\Component\Sale\WeightableInterface;

/**
 * Interface OrderItemInterface
 * @package Ekyna\Component\Sale\Order
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OrderItemInterface extends PriceableInterface, ReferenceableInterface, WeightableInterface
{

    /**
     * Sets the quantity.
     *
     * @param integer $quantity
     *
     * @return OrderItemInterface|$this
     */
    public function setQuantity($quantity);

    /**
     * Returns the quantity.
     *
     * @return integer
     */
    public function getQuantity();

    /**
     * Sets the position.
     *
     * @param integer $position
     *
     * @return OrderItemInterface|$this
     */
    public function setPosition($position);

    /**
     * Returns the position.
     *
     * @return integer
     */
    public function getPosition();

    /**
     * Sets the order.
     *
     * @param \Ekyna\Component\Sale\Order\OrderInterface $order
     *
     * @return OrderItemInterface|$this
     */
    public function setOrder(OrderInterface $order = null);

    /**
     * Returns the order.
     *
     * @return OrderInterface
     */
    public function getOrder();

    /**
     * Sets the product.
     *
     * @param ProductInterface $product
     *
     * @return OrderItemInterface|$this
     */
    public function setProduct(ProductInterface $product = null);

    /**
     * Returns the product.
     *
     * @return \Ekyna\Component\Sale\Product\ProductInterface
     */
    public function getProduct();

    /**
     * Adds an option.
     *
     * @param OrderItemOptionInterface $option
     *
     * @return OrderItemInterface|$this
     */
    public function addOption(OrderItemOptionInterface $option);

    /**
     * Removes an option.
     *
     * @param OrderItemOptionInterface $option
     */
    public function removeOption(OrderItemOptionInterface $option);

    /**
     * Returns the options.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection|OrderItemOptionInterface[]
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
     * @param OrderItemInterface $orderItem
     * 
     * @return boolean
     */
    public function equals(OrderItemInterface $orderItem);

    /**
     * Merge quantity of the given OrderItem.
     */
    public function merge(OrderItemInterface $orderItem);

    /**
     * Sets the extra datas.
     *
     * @param integer $extras
     *
     * @return OrderItemInterface|$this
     */
    public function setExtras($extras);

    /**
     * Returns the extra datas.
     * 
     * @return array
     */
    public function getExtras();

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
     * @return \Ekyna\Component\Sale\TaxesAmounts
     */
    public function getTotalTaxesAmounts();

    /**
     * Returns the total weight.
     *
     * @return float
     */
    public function getTotalWeight();
}
