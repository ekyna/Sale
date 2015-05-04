<?php

namespace Ekyna\Component\Sale\Payment;

/**
 * Interface MethodInterface
 * @package Ekyna\Component\Sale\Payment
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface MethodInterface
{
    /**
     * Returns the identifier.
     *
     * @return integer
     */
    public function getId();

    /**
     * Sets the payment name.
     * @param string $paymentName
     * @return MethodInterface|$this
     */
    public function setPaymentName($paymentName);

    /**
     * Returns the payment name.
     *
     * @return string
     */
    public function getPaymentName();

    /**
     * Sets the factory name.
     *
     * @param string $name
     * @return MethodInterface|$this
     */
    public function setFactoryName($name);

    /**
     * Returns the factory name.
     *
     * @return string
     */
    public function getFactoryName();

    /**
     * Sets the config.
     *
     * @param array $config
     * @return MethodInterface|$this
     */
    public function setConfig(array $config);

    /**
     * Returns the config.
     *
     * @return array
     */
    public function getConfig();

    /**
     * Sets the enabled.
     *
     * @param boolean $enabled
     * @return MethodInterface|$this
     */
    public function setEnabled($enabled);

    /**
     * Returns the enabled.
     *
     * @return boolean
     */
    public function getEnabled();
}
