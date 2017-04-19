<?php

namespace Fousky\Traits\Id;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Lukáš Brzák <lukas.brzak@aquadigital.cz>
 */
trait UUIDTrait
{
    /**
     * @var string|null
     *
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(name="id", type="string")
     */
    protected $id;

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }
}
