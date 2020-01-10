<?php

namespace Dhii\Events\Event;

/**
 * A factory of events.
 *
 * @since [*next-version*]
 */
interface EventFactoryInterface
{
    /**
     * Creates a new event
     *
     * @since [*next-version*]
     *
     * @param string $name   The name of the event.
     * @param array  $params A map of parameter names to values.
     *
     * @return EventInterface The new event.
     */
    public function make(string $name, array $params): EventInterface;
}
