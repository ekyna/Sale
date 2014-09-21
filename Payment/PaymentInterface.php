<?php

namespace Ekyna\Component\Sale\Payment;

/**
 * Interface PaymentInterface
 * @package Ekyna\Component\Sale\Payment
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface PaymentInterface
{
    /**
     * Returns the amount.
     * 
     * @return float
     */
    public function getAmount();

    /**
     * Returns the currency code.
     * 
     * @return string
     */
    public function getCurrency();

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
     * Returns the details.
     * 
     * @return array
     */
    public function getDetails();

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
