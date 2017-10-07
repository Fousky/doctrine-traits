<?php

namespace Fousky\Traits\Confirmed;

/**
 * @author Lukáš Brzák <lukas.brzak@aquadigital.cz>
 */
interface ConfirmationInterface
{
    /**
     * @return bool
     */
    public function isConfirmed(): bool;

    /**
     * @param bool $confirmed
     *
     * @return $this
     */
    public function setConfirmed($confirmed);

    /**
     * @return null|string
     */
    public function getConfirmationToken(): ?string;

    /**
     * @return bool
     */
    public function hasConfirmationToken(): bool;

    /**
     * @param null|string $confirmationToken
     *
     * @return $this
     */
    public function setConfirmationToken($confirmationToken);

    /**
     * @return \DateTime|null
     */
    public function getConfirmedAt(): ?\DateTime;

    /**
     * @param \DateTime|null $confirmedAt
     *
     * @return $this
     */
    public function setConfirmedAt($confirmedAt);
}
