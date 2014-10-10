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
    const STATE_PROCESSING = 'processing';
    const STATE_CANCELLED  = 'cancelled';
    const STATE_FAILED     = 'failed';
    const STATE_SUCCESS    = 'success';
    const STATE_COMPLETED  = 'completed';
    const STATE_REFUNDED   = 'refunded';
    const STATE_UNKNOWN    = 'unknown';

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
            self::STATE_PROCESSING,
            self::STATE_CANCELLED,
            self::STATE_FAILED,
            self::STATE_SUCCESS,
            self::STATE_COMPLETED,
            self::STATE_REFUNDED,
            self::STATE_UNKNOWN,
        );
    }
}
