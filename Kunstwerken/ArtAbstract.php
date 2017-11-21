<?php

namespace Kunstwerken;

abstract class ArtAbstract
{
    public $year;
    public $title;
    public $artist;

    function __construct()
    {
        $this->date = new Date('Y');
    }
    
}