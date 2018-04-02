# Dhii - Event Manager Interface

[![Build Status](https://travis-ci.org/Dhii/event-interface.svg?branch=develop)](https://travis-ci.org/Dhii/event-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/event-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/event-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/event-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/event-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/event-interface/version)](https://packagist.org/packages/dhii/event-interface)
[![Latest Unstable Version](https://poser.pugx.org/dhii/event-interface/v/unstable)](https://packagist.org/packages/dhii/event-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

## Details
This package holds interfaces that are inspired by the [PSR-14][php-fig/event-manager] standard, expanding on it,
and even improving it. This spec is partially compatible with the original PSR-14 spec: `EventInterface` is entirely
compatible (extends PSR interface), and `EventManagerInterface` is forward-compatible (does not extend PSR interface,
but classes extending PSR interface can extend Dhii interface without modifications). The improved standard aims to 
supersede the original spec, and is hoped to inspire changes to PSR-14, making the standard simpler and stricter.
The FIG and the PHP community in general is encouraged to open discussions and make suggestions. 

### Interfaces
- [`EventManagerInterface`][EventManagerInterface] - Takes care of dispatching events and maintaining handler association.
- [`EventInterface`][EventInterface] - Represents an event.
- [`EventFactoryInterface`][EventFactoryInterface] - Creates `EventInterface` instances.
- [`EventManagerFactoryInterface`][EventManagerFactoryInterface] - Creates `EventManagerInterface` instances.


[Dhii]:                                             https://github.com/Dhii/dhii

[php-fig/event-manager]:                            https://github.com/php-fig/fig-standards/blob/master/proposed/event-manager.md

[EventManagerInterface]:                            src/EventManagerInterface.php
[EventInterface]:                                   src/EventInterface.php
[EventFactoryInterface]:                            src/EventFactoryInterface.php
[EventManagerFactoryInterface]:                     src/EventManagerFactoryInterface.php
