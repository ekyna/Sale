<?php

namespace Ekyna\Component\Sale\Product;

use Ekyna\Component\Sale\PriceableInterface;
use Ekyna\Component\Sale\ReferenceableInterface;
use Ekyna\Component\Sale\WeightableInterface;

/**
 * Interface OptionInterface
 * @package Ekyna\Component\Sale\Product
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OptionInterface extends PriceableInterface, ReferenceableInterface, WeightableInterface
{
    /**
     * Returns the id.
     *
     * @return int
     */
    public function getId();

    /**
     * Returns the product.
     *
     * @return ProductInterface
     */
    public function getProduct();

    /**
     * Returns the group.
     *
     * @return string
     */
    public function getGroup();
}
