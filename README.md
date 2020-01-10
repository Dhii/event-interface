# Dhii - Event Interface

[![Build Status](https://travis-ci.org/Dhii/event-interface.svg?branch=develop)](https://travis-ci.org/Dhii/event-interface)
[![Code Climate](https://codeclimate.com/github/Dhii/event-interface/badges/gpa.svg)](https://codeclimate.com/github/Dhii/event-interface)
[![Test Coverage](https://codeclimate.com/github/Dhii/event-interface/badges/coverage.svg)](https://codeclimate.com/github/Dhii/event-interface/coverage)
[![Latest Stable Version](https://poser.pugx.org/dhii/event-interface/version)](https://packagist.org/packages/dhii/event-interface)
[![Latest Unstable Version](https://poser.pugx.org/dhii/event-interface/v/unstable)](https://packagist.org/packages/dhii/event-interface)

## Details
The [PSR-14][] standard provides interfaces used for dispatching events. But what of events themselves?
How can a consumer of the dispatcher (i.e. the emitter) interoperate with the handler, if they have no agreement
on what an event may look like? 

[PSR-14]: https://www.php-fig.org/psr/psr-14/
