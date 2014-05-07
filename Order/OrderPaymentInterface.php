<?php

namespace Ekyna\Component\Sale\Order;

use Ekyna\Component\Sale\Payment\PaymentInterface;

/**
 * OrderPaymentInterface.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OrderPaymentInterface extends PaymentInterface
{
    /**
     * Returns the identifier.
     * 
     * @return integer
     */
    public function getId();

    /**
     * Returns the order.
     * 
     * @return \Ekyna\Component\Sale\Order\OrderInterface
     */
    public function getOrder();
}
