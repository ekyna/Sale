<?php

namespace Ekyna\Component\Sale\Order;

use Ekyna\Component\Sale\PriceableInterface;
use Ekyna\Component\Sale\Product\OptionInterface;
use Ekyna\Component\Sale\ReferenceableInterface;
use Ekyna\Component\Sale\WeightableInterface;

/**
 * Interface OrderItemOptionInterface
 * @package Ekyna\Component\Sale\Order
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OrderItemOptionInterface extends PriceableInterface, ReferenceableInterface, WeightableInterface
{
    /**
     * Sets the order item.
     *
     * @param OrderItemInterface $orderItem
     *
     * @return OrderItemOptionInterface|$this
     */
    public function setOrderItem(OrderItemInterface $orderItem = null);

    /**
     * Returns the order item.
     *
     * @return OrderItemInterface
     */
    public function getOrderItem();

    /**
     * Sets the option.
     *
     * @param OptionInterface $option
     *
     * @return OrderItemOptionInterface|$this
     */
    public function setOption(OptionInterface $option = null);

    /**
     * Returns the option.
     *
     * @return OptionInterface
     */
    public function getOption();
}
