<?php

namespace Ekyna\Component\Sale\Order;

/**
 * Class OrderTypes
 * @package Ekyna\Component\Sale\Order
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
final class OrderTypes
{
    const TYPE_ORDER = 'order';
    const TYPE_CART  = 'cart';
    const TYPE_QUOTE = 'quote';

    /**
     * Returns valid order types.
     *
     * @return array
     */
    public static function getTypes()
    {
        return array(
            self::TYPE_CART,
            self::TYPE_QUOTE,
            self::TYPE_ORDER,
        );
    }
}
