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
    public function getConfirmationToken();

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
    public function getConfirmedAt();

    /**
     * @param \DateTime|null $confirmedAt
     *
     * @return $this
     */
    public function setConfirmedAt($confirmedAt);
}
