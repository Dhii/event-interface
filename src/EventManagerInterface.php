<?php

namespace Psr\EventManager;

/**
 * Interface for EventManager.
 *
 * @since 0.1
 */
interface EventManagerInterface
{
    /**
     * Attach a listener to an event.
     *
     * @since 0.1
     *
     * @param string   $event    The name of the event to attach the listener to.
     * @param callable $callback The event listener.
     * @param int      $priority The priority of the listener.
     *
     * @return bool True on success; false on failure.
     */
    public function attach($event, $callback, $priority = 0);

    /**
     * Detach a listener from an event.
     *
     * @since 0.1
     *
     * @param string   $event    The event to detach the listener from.
     * @param callable $callback The listener to detach.
     *
     * @return bool True on success; false on failure.
     */
    public function detach($event, $callback);

    /**
     * Clear all listeners for a given event.
     *
     * @since 0.1
     *
     * @param string $event The name of the event to detach the listeners from.
     */
    public function clearListeners($event);

    /**
     * Trigger an event.
     *
     * @since 0.1
     *
     * @param string|EventInterface $event  The event or the name of an event to trigger.
     * @param object|string         $target The context, for which the event is being triggered, if any.
     * @param array|object          $argv   The map of event parameters.
     *
     * @return mixed The result of the last event listener.
     */
    public function trigger($event, $target = null, $argv = array());
}
