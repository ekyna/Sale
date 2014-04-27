<?php

namespace Ekyna\Component\Sale\Product;

use Ekyna\Component\Sale\PriceableInterface;
use Ekyna\Component\Sale\ReferenceableInterface;
use Ekyna\Component\Sale\WeighableInterface;

/**
 * ProductInterface.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface ProductInterface extends PriceableInterface, ReferenceableInterface, WeighableInterface
{
    /**
     * Returns the type.
     * 
     * @return integer
     */
    public function getType();
    
    /**
     * Returns the options
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOptions();

    /**
     * Returns the options's groups.
     * 
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOptionsGroups();
}
