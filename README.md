# Dhii - Event Interface

[![Build Status](https://travis-ci.org/Dhii/event-interface.svg?branch=develop)](https://travis-ci.org/Dhii/event-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/event-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/event-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/event-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/event-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/event-interface/version)](https://packagist.org/packages/dhii/event-interface)
[![Latest Unstable Version](https://poser.pugx.org/dhii/event-interface/v/unstable)](https://packagist.org/packages/dhii/event-interface)

## Details
The [PSR-14][] standard provides interfaces used for dispatching events. But what of events themselves?
How can a consumer of the dispatcher (i.e. the emitter) interoperate with the handler, if they have no agreement
on what an event may look like? This package aims to provide interfaces that could facilitate the interoperability
of events that are identified by event name.

## Usage
### Basic Features
In essence, an event is but a map of parameters associated with a name.

```php
<?php
use Dhii\Events\Event\StoppableEventFactoryInterface;

/* @var $factory StoppableEventFactoryInterface */
$event = $factory->make('my_event', ['key' => 'value']);
echo $event->getName(); // 'my_event'
echo $event->getParam('key'); //  'value'

$params = $event->getParams();
var_dump($params); // ['key' => 'value']

$params['hello'] = 'world';
$event->setParams($params);
echo $event->getParam('hello'); // 'world'
?>
```

### With PSR-14
Events cam be dispatched using a standards-compliant event dispatcher.
This example requires the suggested [`dhii/event-dispatcher-interface`][] package.
```php
<?php
use Psr\EventDispatcher\EventDispatcherInterface;
use Dhii\Events\Event\EventInterface;
use Dhii\Events\Event\StoppableEventFactoryInterface;
use Dhii\Events\Listener\AddListenerCapableInterface;

/* @var $dispatcher EventDispatcherInterface */
/* @var $factory StoppableEventFactoryInterface */
/* @var $listenerMap AddListenerCapableInterface */

// First listener will change a value and stop propagation
$listenerMap->addListener('my_event', function (EventInterface $event) {
    $params = $event->getParams();
    $params['key'] = 'other_value';
    $event->setParams($params);
    $event->stopPropagation();
}, 1);

// Second listener is never run, therefore the value does not change again
$listenerMap->addListener('my_event', function (EventInterface $event) {
    $params = $event->getParams();
    $params['key'] = 'yet another value';
    $event->setParams($params);
}, 2);

$event = $factory->make('my_event', ['key' => 'value']);
$dispatcher->dispatch($event);
echo $event->getParam('key'); // 'other_value'
?>
```

[PSR-14]: https://www.php-fig.org/psr/psr-14/
[`dhii/event-dispatcher-interface`]: https://packagist.org/packages/dhii/event-dispatcher-interface
