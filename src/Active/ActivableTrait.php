<?php declare(strict_types = 1);

namespace Fousky\Traits\Active;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Lukáš Brzák <lukas.brzak@fousky.cz>
 */
trait ActivableTrait
{
    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false, options={"default":"1"})
     */
    protected $active = true;

    public function isActive(): bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }
}
