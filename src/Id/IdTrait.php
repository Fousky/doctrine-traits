<?php

namespace Fousky\Traits\Id;

use Doctrine\ORM\Mapping as ORM;

/**
 * @author Lukáš Brzák <lukas.brzak@aquadigital.cz>
 */
trait IdTrait
{
    /**
     * @var int|null
     *
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="id", type="integer")
     */
    protected $id;

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }
}
