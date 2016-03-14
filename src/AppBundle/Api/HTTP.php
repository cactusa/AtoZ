<?php

namespace AppBundle\Api;

use Symfony\Component\HttpFoundation\Request;


class HTTP
{
    public function performRequest($siteUrl)
    {
        // Code to make the external request goes here
        // ...probably using cUrl

        return $siteUrl;

    }
}
