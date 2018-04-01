# Dhii - Event Manager Interface

[![Build Status](https://travis-ci.org/Dhii/event-manager-interface.svg?branch=develop)](https://travis-ci.org/Dhii/event-manager-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/event-manager-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/event-manager-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/event-manager-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/event-manager-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/event-manager-interface/version)](https://packagist.org/packages/dhii/event-manager-interface)
[![Latest Unstable Version](https://poser.pugx.org/dhii/event-manager-interface/v/unstable)](https://packagist.org/packages/dhii/event-manager-interface)
[![This package complies with Dhii standards](https://img.shields.io/badge/Dhii-Compliant-green.svg?style=flat-square)][Dhii]

## Details
This package holds interfaces that are inspired by the [PSR-14][php-fig/event-manager] standard, expanding on it,
and even improving it. The current version is compatible with the PSR-14 spec; however, this is planned to be
changed. The changes will reflect the authors' ideas on how the standard could be made better, and are quite
opinionated. However, the improved standard aims to supersede the original spec, and is hoped to inspire
changes to PSR-14. The FIG and the PHP community in general is encouraged to open discussions and make
suggestions. 

### Interfaces
- [`EventManagerInterface`][EventManagerInterface] - Takes care of dispatching events and maintaining handler association.
- [`EventInterface`][EventInterface] - Represents an event.


[Dhii]:                                             https://github.com/Dhii/dhii

[php-fig/event-manager]:                            https://github.com/php-fig/fig-standards/blob/master/proposed/event-manager.md

[EventManagerInterface]:                            src/EventManagerInterface.php
[EventInterface]:                                   src/EventInterface.php

[0.1.x]:                                            https://github.com/Dhii/event-manager-interface/tree/develop
