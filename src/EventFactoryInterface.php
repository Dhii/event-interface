<?php

declare(strict_types=1);

namespace Dhii\Events\Event;

/**
 * A factory of events.
 *
 * @since 0.3.0-alpha1
 */
interface EventFactoryInterface
{
    /**
     * Creates a new event.
     *
     * @since 0.3.0-alpha1
     *
     * @param string $name   The name of the event.
     * @param array  $params A map of parameter names to values.
     *
     * @return EventInterface The new event.
     */
    public function make(string $name, array $params): EventInterface;
}
