<?php

namespace Intaro\RuleEngineBundle\Event\Dispatcher;

use Symfony\Component\EventDispatcher\Event;

/**
 * Dispatcher of action events
 */
interface ActionEventDispatcherInterface
{
    /**
     * Dispatches an event with or without delay
     *
     * @param string $eventName
     * @param Event $event
     * @param int $delay (default: 0)
     * @return Event
     */
    public function dispatch($eventName, Event $event, $delay = 0);
}