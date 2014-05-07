<?php

namespace Ekyna\Component\Sale\Order;

use Ekyna\Component\Sale\Shipment\ShipmentInterface;

/**
 * OrderShipmentInterface.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OrderShipmentInterface extends ShipmentInterface
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
