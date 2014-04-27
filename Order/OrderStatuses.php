<?php

namespace Ekyna\Component\Sale\Order;

/**
 * OrderStatuses
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
final class OrderStatuses
{
    const CART      = 1;
    const QUOTE     = 2;

    const PENDING   = 3;
    const REFUSED   = 4;
    const ACCEPTED  = 5;
    const SHIPPED   = 6;
    const COMPLETED = 7;
    const CANCELED  = 8;
    const RETURNED  = 9;
}
