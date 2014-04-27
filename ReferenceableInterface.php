<?php

namespace Ekyna\Component\Sale;

/**
 * ReferenceableInterface
 *
 * @author Étienne Dauvergne <contact@ekyna.com>
 */
interface ReferenceableInterface
{
    /**
     * Returns the designation.
     *
     * @return string
     */
    public function getDesignation();

    /**
     * Returns the reference.
     *
     * @return string
     */
    public function getReference();
}
