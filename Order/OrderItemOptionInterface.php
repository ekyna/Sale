<?php

namespace Ekyna\Component\Sale\Order;

use Ekyna\Component\Sale\PriceableInterface;
use Ekyna\Component\Sale\ReferenceableInterface;
use Ekyna\Component\Sale\WeighableInterface;

/**
 * OrderItemOptionInterface.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OrderItemOptionInterface extends PriceableInterface, ReferenceableInterface, WeighableInterface
{
    /**
     * Returns the order item.
     *
     * @return \Ekyna\Component\Sale\Order\OrderItemInterface
     */
    public function getOrderItem();

    /**
     * Returns the option.
     *
     * @return \Ekyna\Component\Sale\Product\OptionInterface
     */
    public function getOption();
}
