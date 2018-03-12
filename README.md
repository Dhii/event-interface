# Dhii - Event Manager Interface

[![Build Status](https://travis-ci.org/Dhii/psr-14.svg?branch=develop)](https://travis-ci.org/Dhii/psr-14)
[![Code Climate](https://codeclimate.com/github/Dhii/psr-14/badges/gpa.svg)](https://codeclimate.com/github/Dhii/psr-14)
[![Test Coverage](https://codeclimate.com/github/Dhii/psr-14/badges/coverage.svg)](https://codeclimate.com/github/Dhii/psr-14/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/psr-14/version)](https://packagist.org/packages/dhii/psr-14)
[![Latest Unstable Version](https://poser.pugx.org/dhii/psr-14/v/unstable)](https://packagist.org/packages/dhii/psr-14)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

## Details
This package holds the interfaces for the [PSR-14 standard][php-fig/event-manager]. When the standard actually enters
a draft state, and the FIG publishes it separately, this package will become deprecated. However, we will maintain
compatibility where possible, and will release versions with proper stability.

### Interfaces
- [`EventManagerInterface`][EventManagerInterface] - Takes care of dispatching events and maintaining handler association.
- [`EventInterface`][EventInterface] - Represents an event.


[Dhii]:                                             https://github.com/Dhii/dhii

[php-fig/event-manager]:                            https://github.com/php-fig/fig-standards/blob/master/proposed/event-manager.md

[EventManagerInterface]:                            src/EventManagerInterface.php
[EventInterface]:                                   src/EventInterface.php
