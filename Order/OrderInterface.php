<?php

namespace Ekyna\Component\Sale\Order;

use Ekyna\Bundle\CoreBundle\Model\TimestampableInterface;
use Ekyna\Bundle\UserBundle\Model\AddressInterface;
use Ekyna\Bundle\UserBundle\Model\UserInterface;

/**
 * Interface OrderInterface
 * @package Ekyna\Component\Sale\Order
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OrderInterface extends TimestampableInterface
{
    /**
     * Update flag to trigger doctrine update event listener.
     */
    public function setUpdated();

    /**
     * Returns the id.
     *
     * @return int
     */
    public function getId();

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
     * Sets the items count.
     *
     * @param integer $count
     * @return OrderInterface|$this
     */
    public function setItemsCount($count);

    /**
     * Returns the items count.
     *
     * @return integer
     */
    public function getItemsCount();

    /**
     * Sets the total weight.
     *
     * @param integer $weight
     * @return OrderInterface|$this
     */
    public function setTotalWeight($weight);

    /**
     * Returns the total weight.
     *
     * @return integer
     */
    public function getTotalWeight();

    /**
     * Sets the currency.
     *
     * @param string $currency
     * @return OrderInterface|$this
     * @deprecated Relevant to payments
     */
    public function setCurrency($currency);

    /**
     * Returns the currency.
     *
     * @return string
     * @deprecated Relevant to payments
     */
    public function getCurrency();

    /**
     * Sets the "all taxes excluded" total.
     *
     * @param float $netTotal
     * @return OrderInterface|$this
     */
    public function setNetTotal($netTotal);

    /**
     * Returns the "all taxes excluded" total.
     *
     * @return float
     */
    public function getNetTotal();

    /**
     * Sets the "all taxes included" total.
     *
     * @param float $atiTotal
     * @return OrderInterface|$this
     */
    public function setAtiTotal($atiTotal);

    /**
     * Returns the "all taxes included" total.
     *
     * @return float
     */
    public function getAtiTotal();

    /**
     * Returns the taxes amounts.
     *
     * @return \Ekyna\Component\Sale\TaxesAmounts
     */
    public function getTaxesAmounts();

    /**
     * Returns the all taxes excluded shipping cost.
     *
     * @return float
     */
    public function getNetShippingCost();

    /**
     * Returns the all taxes included shipping cost.
     *
     * @return mixed
     */
    public function getAtiShippingCost();

    /**
     * Returns the shipping cost taxes amount.
     *
     * @return float
     */
    public function getShippingTaxAmount();

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
     * Sets the state.
     *
     * @param string $state
     * @return OrderInterface|$this
     */
    public function setState($state);

    /**
     * Returns the state.
     *
     * @return string
     */
    public function getState();

    /**
     * Sets the payment state.
     *
     * @param string $paymentState
     * @return OrderInterface|$this
     */
    public function setPaymentState($paymentState);

    /**
     * Returns the payment state.
     * 
     * @return string
     */
    public function getPaymentState();

    /**
     * Sets the shipment state.
     *
     * @param string $shipmentState
     * @return OrderInterface|$this
     */
    public function setShipmentState($shipmentState);

    /**
     * Returns the shipment state.
     * 
     * @return string
     */
    public function getShipmentState();

    /**
     * Sets the "completed at" datetime.
     *
     * @param \DateTime $completedAt
     * @return OrderInterface|$this
     */
    public function setCompletedAt(\DateTime $completedAt = null);

    /**
     * Returns the "completed at" datetime.
     *
     * @return \DateTime
     */
    public function getCompletedAt();

    /**
     * Sets the "deleted at" datetime.
     *
     * @param \DateTime $deletedAt
     * @return OrderInterface|$this
     */
    public function setDeletedAt(\DateTime $deletedAt = null);

    /**
     * Returns the "deleted at" datetime.
     *
     * @return \DateTime
     */
    public function getDeletedAt();

    /**
     * Returns whether the order has the given item or not.
     *
     * @param OrderItemInterface $orderItem
     * @return boolean
     */
    public function hasItem(OrderItemInterface $orderItem);

    /**
     * Adds an item.
     *
     * @param OrderItemInterface $orderItem
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
     * Returns whether the order has the given payment or not.
     *
     * @param OrderPaymentInterface $orderPayment
     * @return boolean
     */
    public function hasPayment(OrderPaymentInterface $orderPayment);

    /**
     * Adds a payment.
     *
     * @param OrderPaymentInterface $orderPayment
     * @return OrderInterface|$this
     */
    public function addPayment(OrderPaymentInterface $orderPayment);

    /**
     * Removes the payment.
     *
     * @param \Ekyna\Component\Sale\Order\OrderPaymentInterface $orderPayment
     */
    public function removePayment(OrderPaymentInterface $orderPayment);

    /**
     * Returns the payments.
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection|OrderPaymentInterface[]
     */
    public function getPayments();

    /**
     * Returns whether the order has the given shipment or not.
     *
     * @param OrderShipmentInterface $orderShipment
     * @return boolean
     */
    public function hasShipment(OrderShipmentInterface $orderShipment);

    /**
     * Adds a shipment.
     *
     * @param OrderShipmentInterface $orderShipment
     * @return OrderInterface|$this
     */
    public function addShipment(OrderShipmentInterface $orderShipment);

    /**
     * Removes the shipment.
     *
     * @param OrderShipmentInterface $orderShipment
     */
    public function removeShipment(OrderShipmentInterface $orderShipment);

    /**
     * Returns the shipments.
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection|OrderShipmentInterface[]
     */
    public function getShipments();

    /**
     * Returns the user.
     *
     * @return UserInterface
     */
    public function getUser();

    /**
     * Sets the user.
     *
     * @param UserInterface $user
     * @return OrderInterface|$this
     */
    public function setUser(UserInterface $user = null);

    /**
     * Sets the invoice address.
     *
     * @param AddressInterface $address
     * @return OrderInterface|$this
     */
    public function setInvoiceAddress(AddressInterface $address = null);

    /**
     * Returns the invoice address.
     *
     * @return AddressInterface
     */
    public function getInvoiceAddress();

    /**
     * Sets the delivery address.
     *
     * @param AddressInterface $address
     * @return OrderInterface|$this
     */
    public function setDeliveryAddress(AddressInterface $address = null);

    /**
     * Returns the delivery address.
     *
     * @return AddressInterface
     */
    public function getDeliveryAddress();
}
