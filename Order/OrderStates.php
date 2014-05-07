<?php

namespace Ekyna\Component\Sale\Order;

/**
 * OrderStates.
 *
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
}
