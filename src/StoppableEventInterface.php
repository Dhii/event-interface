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
     * @return StoppableEventInterface A new event with propagation stopped.
     */
    public function withPropagationStopped();
}
