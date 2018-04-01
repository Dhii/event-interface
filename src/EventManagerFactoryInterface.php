<?php

namespace Dhii\EventManager;

use Dhii\Factory\FactoryInterface;
use Psr\EventManager\EventManagerInterface as BaseEventManagerInterface;

/**
 * A factory of event managers.
 *
 * @since [*next-version*]
 */
interface EventManagerFactoryInterface extends FactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return BaseEventManagerInterface The new event manager.
     */
    public function make($config = null);
}
