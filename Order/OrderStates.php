<?php

namespace Ekyna\Component\Sale\Order;

/**
 * Class OrderStates
 * @package Ekyna\Component\Sale\Order
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
final class OrderStates
{
    const STATE_NEW               = 'new';
    const STATE_PENDING           = 'pending';
    const STATE_REFUSED           = 'refused';
    const STATE_ACCEPTED          = 'accepted';
    const STATE_COMPLETED         = 'completed';
    const STATE_CANCELLED         = 'cancelled';

    /**
     * Returns the valid states.
     *
     * @return array
     */
    public static function getStates()
    {
        return array(
            self::STATE_NEW,
            self::STATE_PENDING,
            self::STATE_REFUSED,
            self::STATE_ACCEPTED,
            self::STATE_COMPLETED,
            self::STATE_CANCELLED,
        );
    }
}
