<?php

namespace Kunstwerken;

class Boek extends ArtAbstract implements IAantalPaginas, IAantalWoorden
{
    public $aantalPaginas;
    public $aantalWoorden;
    
    public function getAantalPaginas(): ?int {
        return $this->AantalPaginas;
    }
    public function setAantalPaginas(int $AantalPaginas): void {
        $this->AantalPaginas = $AantalPaginas;
    }
    public function getAantalWoorden(): ?int {
        return $this->aantalWoorden;
    }
    public function setAantalWoorden(int $aantalWoorden): void {
        $this->aantalWoorden = $aantalWoorden;
    }
}
