<?php

namespace Psr\EventManager;

/**
 * Interface for Event.
 *
 * @since [*next-version*]
 */
interface EventInterface
{
    /**
     * Get event name.
     *
     * @since [*next-version*]
     *
     * @return string
     */
    public function getName();

    /**
     * Get target/context from which event was triggered.
     *
     * @since [*next-version*]
     *
     * @return null|string|object
     */
    public function getTarget();

    /**
     * Get parameters passed to the event.
     *
     * @since [*next-version*]
     *
     * @return array
     */
    public function getParams();

    /**
     * Get a single parameter by name.
     *
     * @since [*next-version*]
     *
     * @param string $name
     *
     * @return mixed
     */
    public function getParam($name);

    /**
     * Set the event name.
     *
     * @since [*next-version*]
     *
     * @param string $name
     */
    public function setName($name);

    /**
     * Set the event target.
     *
     * @since [*next-version*]
     *
     * @param null|string|object $target
     */
    public function setTarget($target);

    /**
     * Set event parameters.
     *
     * @since [*next-version*]
     *
     * @param array $params
     */
    public function setParams(array $params);

    /**
     * Indicate whether or not to stop propagating this event.
     *
     * @since [*next-version*]
     *
     * @param bool $flag
     */
    public function stopPropagation($flag);

    /**
     * Has this event indicated event propagation should stop?
     *
     * @since [*next-version*]
     *
     * @return bool
     */
    public function isPropagationStopped();
}
