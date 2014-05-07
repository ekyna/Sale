<?php

namespace Ekyna\Component\Sale;

/**
 * ReferenceableTrait.
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
trait ReferenceableTrait
{
    /**
     * @var string
     */
    protected $designation;

    /**
     * @var string
     */
    protected $reference;

    /**
     * Sets the designation.
     *
     * @param string $designation
     * @return \Ekyna\Component\Sale\ReferenceableInterface
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    
        return $this;
    }

    /**
     * Returns the designation.
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Sets the reference.
     *
     * @param string $reference
     * @return \Ekyna\Component\Sale\ReferenceableInterface
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Returns the reference.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }
}
