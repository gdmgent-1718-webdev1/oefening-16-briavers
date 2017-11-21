<?php

namespace Kunstwerken;

class Schilderij extends ArtAbstract implements IAfbeelding
{
    public $afbeelding;

    public function getAfbeelding(): ?string {
        return $this->afbeelding;
    }

    public function setAfbeelding(string $afbeelding): void {
        $this->afbeelding = $afbeelding;
    }
}
