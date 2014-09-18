<?php

namespace Ekyna\Component\Sale;

/**
 * WeighableTrait.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
trait WeighableTrait
{
    /**
     * @var float
     */
    protected $weight;

    /**
     * Sets the weight.
     * 
     * @param float $weight
     * 
     * @return \Ekyna\Component\Sale\WeighableInterface|$this
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Returns the weight.
     * 
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
