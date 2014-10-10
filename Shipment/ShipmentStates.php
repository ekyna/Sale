<?php

namespace Ekyna\Component\Sale\Shipment;

/**
 * Class ShipmentStates
 * @package Ekyna\Component\Sale\Shipment
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
final class ShipmentStates
{
    const STATE_CHECKOUT   = 'checkout';
    const STATE_ONHOLD     = 'onhold';
    const STATE_PENDING    = 'pending';
    const STATE_READY      = 'ready';
    const STATE_SHIPPED    = 'shipped';
    const STATE_RETURNED   = 'returned';
    const STATE_CANCELLED  = 'cancelled';

    /**
     * Returns the valid states.
     *
     * @return array
     */
    public static function getStates()
    {
        return array(
            self::STATE_CHECKOUT,
            self::STATE_ONHOLD,
            self::STATE_PENDING,
            self::STATE_READY,
            self::STATE_SHIPPED,
            self::STATE_RETURNED,
            self::STATE_CANCELLED,
        );
    }
}
