<?php

namespace Ekyna\Component\Sale\Order;

use Ekyna\Bundle\UserBundle\Model\AddressInterface;
use Ekyna\Bundle\UserBundle\Model\UserInterface;

/**
 * Interface OrderInterface
 * @package Ekyna\Component\Sale\Order
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OrderInterface
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
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
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
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
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
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
     */
    public function setCurrency($currency);

    /**
     * Returns the currency.
     *
     * @return string
     */
    public function getCurrency();

    /**
     * Sets the "all taxes excluded" total.
     *
     * @param float $netTotal
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
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
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
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
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
     */
    public function setCompletedAt(\DateTime $completedAt = null);

    /**
     * Returns the "completed at" datetime.
     *
     * @return \DateTime
     */
    public function getCompletedAt();

    /**
     * Sets the "created at" datetime.
     *
     * @param \DateTime $createdAt
     * @return OrderInterface|$this
     */
    public function setCreatedAt(\DateTime $createdAt);

    /**
     * Returns the "created at" datetime.
     *
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * Sets the "updated at" datetime.
     *
     * @param \DateTime $updatedAt
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * Returns the "updated at" datetime.
     *
     * @return \DateTime
     */
    public function getUpdatedAt();

    /**
     * Sets the "deleted at" datetime.
     *
     * @param \DateTime $deletedAt
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
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
     * @param \Ekyna\Component\Sale\Order\OrderItemInterface $orderItem
     * @return boolean
     */
    public function hasItem(OrderItemInterface $orderItem);

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
     * Returns whether the order has the given payment or not.
     *
     * @param \Ekyna\Component\Sale\Order\OrderPaymentInterface $orderPayment
     * @return boolean
     */
    public function hasPayment(OrderPaymentInterface $orderPayment);

    /**
     * Adds a payment.
     *
     * @param \Ekyna\Component\Sale\Order\OrderPaymentInterface $orderPayment
     *
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
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
     * @return \Doctrine\Common\Collections\ArrayCollection|\Ekyna\Component\Sale\Payment\PaymentInterface[]
     */
    public function getPayments();

    /**
     * Returns whether the order has the given shipment or not.
     *
     * @param \Ekyna\Component\Sale\Order\OrderShipmentInterface $orderShipment
     * @return boolean
     */
    public function hasShipment(OrderShipmentInterface $orderShipment);

    /**
     * Adds a shipment.
     *
     * @param \Ekyna\Component\Sale\Order\OrderShipmentInterface $orderShipment
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
     */
    public function addShipment(OrderShipmentInterface $orderShipment);

    /**
     * Removes the shipment.
     *
     * @param \Ekyna\Component\Sale\Order\OrderShipmentInterface $orderShipment
     */
    public function removeShipment(OrderShipmentInterface $orderShipment);

    /**
     * Returns the shipments.
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection|\Ekyna\Component\Sale\Shipment\ShipmentInterface[]
     */
    public function getShipments();

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
    public function setUser(UserInterface $user = null);

    /**
     * Sets the invoice address.
     *
     * @param \Ekyna\Bundle\UserBundle\Model\AddressInterface $address
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
     */
    public function setInvoiceAddress(AddressInterface $address = null);

    /**
     * Returns the invoice address.
     *
     * @return \Ekyna\Bundle\UserBundle\Model\AddressInterface
     */
    public function getInvoiceAddress();

    /**
     * Sets the delivery address.
     *
     * @param \Ekyna\Bundle\UserBundle\Model\AddressInterface $address
     * @return \Ekyna\Bundle\OrderBundle\Entity\Order
     */
    public function setDeliveryAddress(AddressInterface $address = null);

    /**
     * Returns the delivery address.
     *
     * @return \Ekyna\Bundle\UserBundle\Model\AddressInterface
     */
    public function getDeliveryAddress();
}
