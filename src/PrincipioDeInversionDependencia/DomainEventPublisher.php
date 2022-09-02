<?php

namespace Solid\Examples\PrincipioDeInversionDependencia;

final class DomainEventPublisher
{
    public function publish(string $name): void
    {
        echo 'Event: <b>' . $name . '</b> publish successfully';
    }
}
