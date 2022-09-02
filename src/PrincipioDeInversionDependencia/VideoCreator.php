<?php

namespace Solid\Examples\PrincipioDeInversionDependencia;

use Solid\Examples\PrincipioDeInversionDependencia\VideoRepository;
use Solid\Examples\PrincipioDeInversionDependencia\DomainEventPublisher;

class VideoCreator
{
    private $videoRepository;
    private $domainEventPublisher;

    public function __construct()
    {
        $this->videoRepository = new VideoRepository();
        $this->domainEventPublisher = new DomainEventPublisher();
    }

    public function create(string $name): void
    {
        try {
            $this->videoRepository->save($name);
            echo "<br>";
            echo "<br>";
            $this->domainEventPublisher->publish($name);
        } catch (\Exception $e) {
            echo 'Exception capture: ' . $e->getMessage() . '\n';
        }
    }
}
