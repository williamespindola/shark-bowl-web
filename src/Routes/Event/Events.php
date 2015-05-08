<?php

namespace Phpsp\SharkBowl\Route\Event;

class Events
{
    protected $eventsCollection;

    public function __construct(Collection $eventsCollection)
    {
        $this->eventsCollection = $eventsCollection;
    }

    public function get()
    {
        $collection = $this->eventsCollection->fetchAll();

        return ['eventsCollection' => $collection];
    }
}
