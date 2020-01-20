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
    public function getName(): string;

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
     * @since [*next-version*]
     * @return mixed The value of the parameter.
     *
     */
    public function getParam(string $name, $default = null);

    /**
     * Sets parameters for this instance.
     *
     * @since [*next-version*]
     *
     * @param array $params The map of parameter names to values.
     *                      Only the parameters that exist here will be changed. The rest will remain unchanged.
     *
     * @return void
     */
    public function setParams(array $params);
}
