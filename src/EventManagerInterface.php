<?php

namespace Psr\EventManager;

/**
 * Interface for EventManager.
 *
 * @since [*next-version*]
 */
interface EventManagerInterface
{
    /**
     * Attaches a listener to an event.
     *
     * @since [*next-version*]
     *
     * @param string   $event    the event to attach too
     * @param callable $callback a callable function
     * @param int      $priority the priority at which the $callback executed
     *
     * @return bool true on success false on failure
     */
    public function attach($event, $callback, $priority = 0);

    /**
     * Detaches a listener from an event.
     *
     * @since [*next-version*]
     *
     * @param string   $event    the event to attach too
     * @param callable $callback a callable function
     *
     * @return bool true on success false on failure
     */
    public function detach($event, $callback);

    /**
     * Clear all listeners for a given event.
     *
     * @since [*next-version*]
     *
     * @param string $event
     */
    public function clearListeners($event);

    /**
     * Trigger an event.
     *
     * Can accept an EventInterface or will create one if not passed.
     *
     * @since [*next-version*]
     *
     * @param string|EventInterface $event
     * @param object|string         $target
     * @param array|object          $argv
     *
     * @return mixed
     */
    public function trigger($event, $target = null, $argv = array());
}
