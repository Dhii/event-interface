<?php

namespace Dhii\Events\Event;

/**
 * A factory of stoppable events.
 */
interface StoppableEventFactoryInterface extends EventFactoryInterface
{
    /**
     * {@inheritDoc}
     *
     * @return StoppableEventInterface
     */
    public function make(string $name, array $params): EventInterface;
}