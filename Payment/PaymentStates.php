<?php

namespace Ekyna\Component\Sale\Payment;

/**
 * PaymentStates.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
final class PaymentStates
{
    const STATE_NEW        = 'new';
    const STATE_PENDING    = 'pending';
    const STATE_PROCESSING = 'processing';
    const STATE_CANCELLED  = 'cancelled';
    const STATE_FAILED     = 'failed';
    const STATE_SUCCESS    = 'success';
    const STATE_COMPLETED  = 'completed';
    const STATE_REFUNDED   = 'refunded';
    const STATE_UNKNOWN    = 'unknown';
}
