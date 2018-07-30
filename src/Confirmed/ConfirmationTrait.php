<?php

namespace Fousky\Traits\Confirmed;

use Doctrine\ORM\Mapping as ORM;

/**
 * User account is `confirmed` OR `non-confirmed` (e.g. by email address).
 *
 * @author Lukáš Brzák <lukas.brzak@fousky.cz>
 */
trait ConfirmationTrait
{
    /**
     * @var bool
     *
     * @ORM\Column(name="is_confirmed", type="boolean", nullable=false, options={"default":"0"})
     */
    protected $confirmed = false;

    /**
     * @var string|null
     *
     * @ORM\Column(name="confirmation_token", type="string", nullable=true)
     */
    protected $confirmationToken;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="confirmed_at", type="datetime", nullable=true)
     */
    protected $confirmedAt;

    public function isConfirmed(): bool
    {
        return $this->confirmed === true;
    }

    public function setConfirmed(bool $confirmed): self
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    public function getConfirmationToken(): ?string
    {
        return $this->confirmationToken;
    }

    public function hasConfirmationToken(): bool
    {
        return $this->confirmationToken !== null;
    }

    public function setConfirmationToken(?string $confirmationToken): self
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    public function getConfirmedAt(): ?\DateTime
    {
        return $this->confirmedAt;
    }

    public function setConfirmedAt(?\DateTime $confirmedAt): self
    {
        $this->confirmedAt = $confirmedAt;

        return $this;
    }
}
