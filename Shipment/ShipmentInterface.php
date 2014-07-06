<?php

namespace Ekyna\Component\Sale\Shipment;

/**
 * ShipmentInterface.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface ShipmentInterface
{
    /**
     * Returns the state.
     *
     * @return string
     */
    public function getState();

    /**
     * Returns the method.
     *
     * @return string
     */
    public function getMethod();

    /**
     * Returns the "created at" datetime.
     *
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * Returns the "updated at" datetime.
     *
     * @return \DateTime
     */
    public function getUpdatedAt();
}
