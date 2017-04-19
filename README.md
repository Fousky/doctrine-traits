# fousky/doctrine-traits
Make Doctrine annotation mapping simply - use prepared traits ;-)

## 1. Instalation via Composer

  `composer require fousky/doctrine-traits`

## 2. Enjoy it!

* `ActiveableTrait` and `ActiveableInterface` use for `(bool) $active` definition.
* `ConfirmationTrait` and `ConfirmationInterface` use for `bool $confirmed`, `string $confirmationToken` and `\DateTime $confirmedAt` definition.
* `IdTrait` use for `integer $id` mapping.
* `UUIDTrait` use for UUID `string $id` mapping.
* `TimestampableTrait` use for `\DateTime $createdAt` and `\DateTime|null $updatedAt` mapping with `PrePersist` and `PreUpdate` lifecycle callbacks.
