<?php

namespace transport\strategy;

class StrategyTransport
{
    public Itransport $strategy;

    public function __construct(Itransport $strategy)
    {
        $this->strategy = $strategy;
    }

    public function useStrategy(Itransport $strategy)
    {
        $this->strategy = $strategy;
    }

}