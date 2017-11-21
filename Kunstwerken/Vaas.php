<?php

namespace Kunstwerken;

class Vaas extends ArtAbstract implements IAfbeelding, IGewicht
{
    public $afbeelding;
    public $gewicht;

    public function getAfbeelding(): ?string {
        return $this->afbeelding;
    }

    public function setAfbeelding(string $afbeelding): void {
        $this->afbeelding = $afbeelding;
    }

    public function getGewicht(): ?int {
        return $this->gewicht;
    }

    public function setGewicht(int $gewicht): void {
        $this->gewicht = $gewicht;
    }
}
