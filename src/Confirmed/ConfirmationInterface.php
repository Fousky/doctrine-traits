<?php declare(strict_types = 1);

namespace Fousky\Traits\Confirmed;

/**
 * @author Lukáš Brzák <lukas.brzak@fousky.cz>
 */
interface ConfirmationInterface
{
    public function isConfirmed(): bool;

    public function setConfirmed(bool $confirmed);

    public function getConfirmationToken(): ?string;

    public function hasConfirmationToken(): bool;

    public function setConfirmationToken(?string $confirmationToken);

    public function getConfirmedAt(): ?\DateTime;

    public function setConfirmedAt(?\DateTime $confirmedAt);
}
