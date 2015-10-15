<?php

namespace Ekyna\Component\Sale\Payment;

/**
 * Class PaymentStates
 * @package Ekyna\Component\Sale\Payment
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
final class PaymentStates
{
    const STATE_NEW        = 'new';
    const STATE_PENDING    = 'pending';
    const STATE_CAPTURED   = 'captured';
    const STATE_FAILED     = 'failed';
    const STATE_CANCELLED  = 'cancelled';
    const STATE_REFUNDED   = 'refunded';
    const STATE_AUTHORIZED = 'authorized';
    const STATE_SUSPENDED  = 'suspended';
    const STATE_EXPIRED    = 'expired';
    const STATE_UNKNOWN    = 'unknown';
}
