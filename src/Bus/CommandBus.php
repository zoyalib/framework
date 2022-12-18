<?php

declare(strict_types=1);

namespace Zoya\Bus;

interface CommandBus
{
    /**
     * @param  object  $command
     */
    public function dispatch(object $command): void;
}
