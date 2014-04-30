<?php

namespace Ekyna\Component\Sale\Product;

use Ekyna\Component\Sale\PriceableInterface;
use Ekyna\Component\Sale\ReferenceableInterface;
use Ekyna\Component\Sale\WeighableInterface;

/**
 * OptionInterface.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface OptionInterface extends PriceableInterface, ReferenceableInterface, WeighableInterface
{
    /**
     * Returns the product.
     *
     * @return \Ekyna\Component\Sale\Product\ProductInterface
     */
    public function getProduct();

    /**
     * Returns the group.
     *
     * @return string
     */
    public function getGroup();
}
