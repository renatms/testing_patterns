<?php

namespace transport;

class StrategyTransport
{
    public $strategy;

    public function __construct(Itransport $strategy)
    {
        $this->strategy = $strategy;
    }

    public function useStrategy(Itransport $strategy)
    {
        $this->strategy = $strategy;
    }

}