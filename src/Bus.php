<?php

namespace transport;

class Bus implements Itransport
{

    public function send()
    {
        echo "we r going by Bus " . '</br>';
    }
}