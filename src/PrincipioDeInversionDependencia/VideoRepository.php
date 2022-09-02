<?php

namespace Solid\Examples\PrincipioDeInversionDependencia;

final class VideoRepository
{
    public function save(string $name): void
    {
        echo 'Video: <b>' . $name . '</b> created successfully';
    }
}
