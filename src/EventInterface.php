<?php

namespace Dhii\Events\Event;

/**
 * Represents an application event.
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
     * @return string The name of the event.
     *                The event name contains mixed-case alphanumeric characters, as well as '_' (underscore) and '.' (period).
     */
    public function getName();

    /**
     * Get parameters passed to the event.
     *
     * @since [*next-version*]
     *
     * @return array<string, mixed> The map of event parameter names to values.
     */
    public function getParams(): array;

    /**
     * Get a single parameter by name.
     *
     * @param string  $name    The name of the parameter to get.
     * @param mixed   $default The value to return if the parameter does not exist.
     *
     * @return mixed The value of the parameter.
     * @since [*next-version*]
     *
     */
    public function getParam(string $name, $default = null);

    /**
     * Create a new instance with the specified parameters.
     *
     * @since [*next-version*]
     *
     * @param array $params The map of parameter names to values.
     *                      Only the parameters that exist here will be changed. The rest will remain unchanged.
     *
     * @return static A new instance with the specified parameters overriding parameters of this instance.
     */
    public function withParams(array $params);
}
