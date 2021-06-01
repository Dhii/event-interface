# Change log
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/)
and this project adheres to [Semantic Versioning](http://semver.org/).

## [[*next-version*]] - YYYY-MM-DD
### Removed
- Suppport for PHP < 7.2.
- No longer relying on `dhii/event dispatcher`, but using `psr/event-dispatcher` instead.

### Changed
- Upgraded tooling and configs.

## [0.3.0-alpha1] - 2020-04-09
This release is very BC-breaking. It takes advantage of the fact that the new accepted
[PSR-14][] standard already declares an event dispatcher and an interface for events which
can have their propagation stopped. The aim of this release is to remove all extras,
and only provide an event standard, complementary to [PSR-14][].

A secondary objective of this release is to move away from legacy standards, and update
the project with current development practices. Consequently, PHP 5.x support has been
dropped, and the project has been updated to use newer versions of testing tools,
while being refactored accordingly.

### Removed
- `EventManagerInterface`, its factory, and tests.
- Dependency on legacy [PSR-14][] mirror.
- Dependency on legacy standards and testing tools.

### Changed
- `EventInterface` re-worked. It is modelled against the previous PSR draft version,
but made immutable, and with extras removed.
- Event factory no longer uses legacy factory standard, and now is specific to the
definition of event interface.
- The package root namespace is changed from `Dhii\Event` to `Dhii\Events`. This
is to match the structure of [`dhii/event-dispatcher`][].

### Added
- Docker environment configuration. 

## [0.2] - 2020-01-09
Stable release.

## [0.2-alpha1] - 2018-04-02
### Changed
- Project now a Dhii project.
- Namespaces converted to proprietary.
- Broke BC for `EventManagerInterface`: no longer extends PSR interface, but is forward-compatible.

## [0.1.1-alpha1] - 2018-03-13
### Added
- Tests.
- Documentation.
- Code standards.

## [0.1] - 2016-07-06
Initial version.


[`dhii/event-dispatcher`]: https://github.com/Dhii/event-dispatcher 
[PSR-14]: https://www.php-fig.org/psr/psr-14/
