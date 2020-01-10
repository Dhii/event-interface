<?php

namespace Dhii\Events\Event;

/**
 * An event whose propagation can be stopped.
 */
interface StoppableEventInterface extends EventInterface, IsPropagationStoppedCapableInterface
{
    /**
     * Signals to dispatchers that no more listeners to this event should be processed.
     *
     * @return void
     */
    public function stopPropagation();
}
