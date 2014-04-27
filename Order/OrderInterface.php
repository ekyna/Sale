<?php

namespace Ekyna\Component\Sale\Order;

/**
 * OrderInterface.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OrderInterface
{
    /**
     * Returns the number.
     *
     * @return string
     */
    public function getNumber();

    /**
     * Returns the items count.
     *
     * @return integer
     */
    public function getItemsCount();

    /**
     * Returns the total weight.
     *
     * @return integer
     */
    public function getTotalWeight();

    /**
     * Returns the "all taxes excluded" total.
     *
     * @return float
     */
    public function getNetTotal();

    /**
     * Returns the "all taxes included" total.
     *
     * @return float
     */
    public function getAtiTotal();

    /**
     * Get status.
     *
     * @return integer
     */
    public function getStatus();

    /**
     * Returns the "expires at" datetime.
     *
     * @return \DateTime
     */
    public function getExpiresAt();

    /**
     * Returns the "completed at" datetime.
     *
     * @return \DateTime
     */
    public function getCompletedAt();

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

    /**
     * Returns the "deleted at" datetime.
     *
     * @return \DateTime
     */
    public function getDeletedAt();

    /**
     * Returns the items.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems();

    /**
     * Returns wether the order requires shipment (has physical items)
     */
    public function requiresShipment();
    
    /**
     * Returns wether the order has items or not
     *
     * @return boolean
     */
    public function isEmpty();

    /**
     * Returns the user.
     *
     * @return \Ekyna\Bundle\UserBundle\Model\UserInterface
     */
    public function getUser();

    /**
     * Returns the invoice address.
     *
     * @return \Ekyna\Bundle\UserBundle\Model\AddressInterface
     */
    public function getInvoiceAddress();

    /**
     * Returns the delivery address.
     *
     * @return \Ekyna\Bundle\UserBundle\Model\AddressInterface
     */
    public function getDeliveryAddress();
}
