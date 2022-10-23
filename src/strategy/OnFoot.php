<?php

namespace transport\strategy;

class OnFoot implements Itransport
{

    public function send()
    {
        echo "we r going On Foot"  . '</br>';
    }
}