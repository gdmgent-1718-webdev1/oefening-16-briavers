<?php

namespace Kunstwerken;

abstract class ArtAbstract
{
    public $jaar;
    public $titel;
    public $artiest;
    
    function __construct()
    {
        $this->jaar = new \DateTime("Y");
    }
    
   
}