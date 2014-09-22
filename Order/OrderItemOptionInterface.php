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
     * @param \Ekyna\Component\Sale\Order\OrderItemInterface $orderItem
     *
     * @return OrderItemOptionInterface
     */
    public function setOrderItem(OrderItemInterface $orderItem = null);

    /**
     * Returns the order item.
     *
     * @return \Ekyna\Component\Sale\Order\OrderItemInterface
     */
    public function getOrderItem();

    /**
     * Sets the option.
     *
     * @param \Ekyna\Component\Sale\Product\OptionInterface $option
     *
     * @return OrderItemOptionInterface
     */
    public function setOption(OptionInterface $option = null);

    /**
     * Returns the option.
     *
     * @return \Ekyna\Component\Sale\Product\OptionInterface
     */
    public function getOption();
}
