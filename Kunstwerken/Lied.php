<?php

namespace Kunstwerken;

//extends = overerven van posts
class Lied extends ArtAbstract implements IDuur
{
    public $duur;

    public function getDuur(): ?string {
        return $this->duur;
    }

    public function setDuur(string $duur): void {
        $this->duur = $duur;
    }
}
