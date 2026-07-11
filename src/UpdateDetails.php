<?php

namespace Namingo\Registrars;

final class UpdateDetails
{
    /**
     * @param bool|null $autoRenew Enable or disable automatic renewal
     */
    public function __construct(
        public ?bool $autoRenew = null,
    ) {
    }
}
