<?php

namespace App\Services\Patterns\Behavioral\Observer;

class ConcreteObserverB implements \SplObserver
{
    public function update(\SplSubject $subject): void
    {
        if ($subject->state == 0 || $subject->state >= 2) {
            echo "ConcreteObserverB: Reacted to the event.<br>";
        }
    }
}
