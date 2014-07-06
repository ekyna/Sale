<?php

namespace Ekyna\Component\Sale\Order;

/**
 * OrderInterface.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OrderInterface
{
    const TYPE_ORDER = 'order';
    const TYPE_CART  = 'cart';
    const TYPE_QUOTE = 'quote1';

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
     * Returns the currency.
     *
     * @return string
     */
    public function getCurrency();

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
     * Returns the type.
     *
     * @return string
     */
    public function getType();

    /**
     * Returns whether the order is locked.
     *
     * @return boolean
     */
    public function getLocked();

    /**
     * Returns the state.
     *
     * @return string
     */
    public function getState();

    /**
     * Returns the payment state.
     * 
     * @return string
     */
    public function getPaymentState();

    /**
     * Returns the shipment state.
     * 
     * @return string
     */
    public function getShipmentState();

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
     * Adds an item.
     *
     * @param \Ekyna\Component\Sale\Order\OrderItemInterface $orderItem
     *
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
     */
    public function addItem(OrderItemInterface $orderItem);

    /**
     * Removes the item.
     *
     * @param \Ekyna\Component\Sale\Order\OrderItemInterface $orderItem
     */
    public function removeItem(OrderItemInterface $orderItem);

    /**
     * Returns the items.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getItems();

    /**
     * Returns whether the order requires shipment (has physical items)
     */
    public function requiresShipment();
    
    /**
     * Returns whether the order has items or not
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

    /**
     * Returns the payments.
     * 
     * @return \Ekyna\Sale\Payment\PaymentInterface[]
     */
    public function getPayments();

    /**
     * Returns the shipments.
     * 
     * @return \Ekyna\Sale\Shipment\ShipmentInterface[]
     */
    public function getShipments();
}
