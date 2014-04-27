<?php

namespace Ekyna\Component\Sale;

/**
 * ReferenceableTrait
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
     * Set designation
     *
     * @param string $designation
     * @return Sellable
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    
        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Sellable
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }
}
