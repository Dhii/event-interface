<?php

declare(strict_types=1);

namespace Dhii\Events\Event;

use Psr\EventDispatcher\StoppableEventInterface as PsrStoppableEventInterface;

/**
 * An event whose propagation can be stopped.
 */
interface StoppableEventInterface extends EventInterface, PsrStoppableEventInterface
{
    /**
     * Signals to dispatchers that no more listeners to this event should be processed.
     *
     */
    public function stopPropagation(): void;
}
