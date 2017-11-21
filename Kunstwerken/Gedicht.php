<?php

namespace Kunstwerken;

class Gedicht extends ArtAbstract implements IAantalWoorden
{
    public $aantalWoorden;

    public function getAantalWoorden(): ?int {
        return $this->aantalWoorden;
    }

    public function setAantalWoorden(int $aantalWoorden): void {
        $this->aantalWoorden = $aantalWoorden;
    }
}
