<?php

namespace Fousky\Traits\Active;

use Doctrine\ORM\Mapping as ORM;

/**
 * `active` OR `inactive` (disabled).
 *
 * @author Lukáš Brzák <lukas.brzak@aquadigital.cz>
 */
trait ActivableTrait
{
    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false, options={"default":"1"})
     */
    protected $active = true;

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = (bool) $active === true;

        return $this;
    }
}
