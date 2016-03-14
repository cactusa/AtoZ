<?php

namespace AppBundle\Api;

use Symfony\Component\HttpFoundation\Request;


class HTTP
{
    // Example base url: ibl.api.bbci.co.uk/ibl/v1/atoz/a/programmes?page=1
    const BASE_URL = 'ibl.api.bbci.co.uk';
    const FIRST_PART = '/ibl/v1/atoz/';
    const SECOND_PART = '/programmes?page=';
    public function performRequest($siteUrl)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $siteUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json')); // Assuming you're requesting JSON
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        $data = json_decode($response);

        return $data;

    }

    public function buildUrl($letter, $page)
    {
        return static::BASE_URL . static::FIRST_PART . $letter . static::SECOND_PART . $page;
//        return "{BASE_URL}{FIRST_PART}{$letter}{SECOND_PART}{$page}";
    }

    public function navigationList()
    {


//        $this->performRequest();

    }
}
