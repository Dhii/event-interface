<?php

namespace Psr\EventManager;

/**
 * Interface for Event.
 *
 * @since 0.1
 */
interface EventInterface
{
    /**
     * Get event name.
     *
     * @since 0.1
     *
     * @return string The name of the event.
     *                The event name contains mixed-case alphanumeric characters, as well as '_' (underscore) and '.' (period).
     */
    public function getName();

    /**
     * Get target/context from which event was triggered.
     *
     * @since 0.1
     *
     * @return null|string|object The event context, if any.
     */
    public function getTarget();

    /**
     * Get parameters passed to the event.
     *
     * @since 0.1
     *
     * @return array The map of event parameter names to values.
     */
    public function getParams();

    /**
     * Get a single parameter by name.
     *
     * @since 0.1
     *
     * @param string $name The name of the parameter to get.
     *
     * @return mixed The value of the parameter.
     */
    public function getParam($name);

    /**
     * Set the event name.
     *
     * @since 0.1
     *
     * @param string $name The name of the event.
     */
    public function setName($name);

    /**
     * Set the event target.
     *
     * @since 0.1
     *
     * @param null|string|object $target The context of the event.
     */
    public function setTarget($target);

    /**
     * Set event parameters.
     *
     * @since 0.1
     *
     * @param array $params The map of parameter names to values.
     */
    public function setParams(array $params);

    /**
     * Indicate whether or not to stop propagating this event.
     *
     * @since 0.1
     *
     * @param bool $flag If true, no further listeners for this event will be triggered.
     */
    public function stopPropagation($flag);

    /**
     * Has this event indicated event propagation should stop?
     *
     * @since 0.1
     *
     * @return bool True if propagation has been stopped; false otherwise.
     */
    public function isPropagationStopped();
}
