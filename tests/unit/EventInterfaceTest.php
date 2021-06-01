<?php

namespace Dhii\Events\UnitTest\Event;

use Dhii\Events\Event\EventInterface as TestSubject;
use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_MockObject_MockObject as MockObject;

/**
 * Tests {@see TestSubject}.
 *
 * @since 0.3.0-alpha1
 */
class EventInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @since 0.3.0-alpha1
     *
     * @return MockObject|TestSubject The new instance.
     */
    public function createInstance()
    {
        $mock = $this->getMockBuilder(TestSubject::class)
            ->getMock();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since 0.3.0-alpha1
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            TestSubject::class,
            $subject,
            'A valid instance of the test subject could not be created.'
        );
    }
}
