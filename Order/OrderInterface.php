<?php

namespace Ekyna\Component\Sale\Order;

/**
 * Interface OrderInterface
 * @package Ekyna\Component\Sale\Order
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OrderInterface
{
    const TYPE_ORDER = 'order';
    const TYPE_CART  = 'cart';
    const TYPE_QUOTE = 'quote';

    /**
     * Returns the number.
     *
     * @return string
     */
    public function getNumber();

    /**
     * Sets the number.
     *
     * @param $number
     * @return OrderInterface|$this
     */
    public function setNumber($number);

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
     * Sets the type.
     *
     * @param $type
     * @return OrderInterface|$this
     */
    public function setType($type);

    /**
     * Returns whether the order is locked.
     *
     * @return boolean
     */
    public function getLocked();

    /**
     * Sets whether the order is locked or not.
     *
     * @param boolean $locked
     * @return OrderInterface|$this
     */
    public function setLocked($locked);

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
     * Sets the "created at" datetime.
     *
     * @param \DateTime $createdAt
     * @return OrderInterface|$this
     */
    public function setCreatedAt(\DateTime $createdAt);

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
     * @param OrderItemInterface $orderItem
     *
     * @return OrderInterface|$this
     */
    public function addItem(OrderItemInterface $orderItem);

    /**
     * Removes the item.
     *
     * @param OrderItemInterface $orderItem
     */
    public function removeItem(OrderItemInterface $orderItem);

    /**
     * Returns the items.
     *
     * @return \Doctrine\Common\Collections\ArrayCollection|OrderItemInterface[]
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
     * Sets the user.
     *
     * @param \Ekyna\Bundle\UserBundle\Model\UserInterface $user
     * @return mixed
     */
    public function setUser(\Ekyna\Bundle\UserBundle\Model\UserInterface $user = null);

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
     * Adds a payment.
     *
     * @param \Ekyna\Component\Sale\Order\OrderPaymentInterface $orderPayment
     *
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
     */
    public function addPayment(OrderPaymentInterface $orderPayment);

    /**
     * Returns the payments.
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection|\Ekyna\Component\Sale\Payment\PaymentInterface[]
     */
    public function getPayments();

    /**
     * Returns the shipments.
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection|\Ekyna\Component\Sale\Shipment\ShipmentInterface[]
     */
    public function getShipments();
}
