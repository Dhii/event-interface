<?php

namespace Dhii\Event;

use Psr\EventManager\EventInterface as BaseEventInterface;
use RuntimeException;

/**
 * Represents a manager of events.
 *
 * Responsible for managing event handlers, and dispatching events.
 *
 * @since [*next-version*]
 */
interface EventManagerInterface
{
    /**
     * Triggers an event.
     *
     * @since [*next-version*]
     *
     * @param BaseEventInterface $event The event to trigger.
     *
     * @throws RuntimeException If event could not be triggered.
     *
     * @return mixed The result of the last handler invocation.
     */
    public function trigger(BaseEventInterface $event);

    /**
     * Attaches a listener to an event.
     *
     * @since [*next-version*]
     *
     * @param string $event The name of the event to attach to.
     * @param callable $callback The listener to attach.
     * @param int $priority The priority at which the listener is executed.
     *
     * @throws RuntimeException If the listener could not be attached.
     */
    public function attach($event, $callback, $priority = 0);

    /**
     * Detaches a listener from an event.
     *
     * @since [*next-version*]
     *
     * @param string $event The name of the event to attach to.
     * @param callable $callback The listener to detach.
     *
     * @throws RuntimeException If callback could not be detached.
     *
     * @return bool True on success; false otherwise.
     */
    public function detach($event, $callback);

    /**
     * Clear all listeners for a given event name.
     *
     * @since [*next-version*]
     *
     * @param string $eventName Name of the event to clear the listeners for.
     *
     * @throws RuntimeException If listeners could not be cleared.
     */
    public function clearListeners($eventName);

}
