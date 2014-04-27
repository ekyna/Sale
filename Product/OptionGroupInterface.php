<?php

namespace Ekyna\Component\Sale\Product;

/**
 * OptionGroupInterface.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OptionGroupInterface
{
    /**
     * Returns the name.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the position.
     *
     * @return integer
     */
    public function getPosition();

    /**
     * Returns wether the option has sellable options or not (non-mapped field).
     *
     * @return boolean
     */
    public function hasOptions();

    /**
     * Returns the options (non-mapped field).
     *
     * @return array
     */
    public function getOptions();
}
