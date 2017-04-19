<?php

namespace Fousky\Traits\Confirmed;

use Doctrine\ORM\Mapping as ORM;

/**
 * User account is `confirmed` OR `non-confirmed` (e.g. by email address).
 *
 * @author Lukáš Brzák <lukas.brzak@aquadigital.cz>
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

    /**
     * @return bool
     */
    public function isConfirmed(): bool
    {
        return $this->confirmed === true;
    }

    /**
     * @param bool $confirmed
     *
     * @return $this
     */
    public function setConfirmed($confirmed)
    {
        $this->confirmed = $confirmed;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getConfirmationToken()
    {
        return $this->confirmationToken;
    }

    /**
     * @return bool
     */
    public function hasConfirmationToken(): bool
    {
        return $this->confirmationToken !== null;
    }

    /**
     * @param null|string $confirmationToken
     *
     * @return $this
     */
    public function setConfirmationToken($confirmationToken)
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getConfirmedAt()
    {
        return $this->confirmedAt;
    }

    /**
     * @param \DateTime|null $confirmedAt
     *
     * @return $this
     */
    public function setConfirmedAt($confirmedAt)
    {
        $this->confirmedAt = $confirmedAt;

        return $this;
    }
}
