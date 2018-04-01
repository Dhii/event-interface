<?php

namespace Dhii\EventManager;

use Dhii\Factory\FactoryInterface;
use Psr\EventManager\EventInterface as BaseEventInterface;

/**
 * A factory of events.
 *
 * @since [*next-version*]
 */
interface EventFactoryInterface extends FactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @since [*next-version*]
     *
     * @return BaseEventInterface The new event.
     */
    public function make($config = null);
}
