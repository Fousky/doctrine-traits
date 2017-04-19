<?php

namespace Fousky\Traits\Active;

/**
 * @author Lukáš Brzák <lukas.brzak@aquadigital.cz>
 */
interface ActivableInterface
{
    /**
     * @return boolean
     */
    public function isActive(): bool;

    /**
     * @param bool $active
     *
     * @return $this
     */
    public function setActive($active);
}
