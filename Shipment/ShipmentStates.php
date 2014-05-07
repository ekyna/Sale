<?php

namespace Ekyna\Component\Sale\Shipment;

/**
 * ShipmentStates.
 *
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
}
