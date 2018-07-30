<?php declare(strict_types = 1);

namespace Fousky\Traits\Active;

/**
 * @author Lukáš Brzák <lukas.brzak@fousky.cz>
 */
interface ActivableInterface
{
    public function isActive(): bool;

    public function setActive(bool $active);
}
