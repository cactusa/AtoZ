<?php

namespace AppBundle\Api;

use Symfony\Component\HttpFoundation\Request;


class Content
{
    /**
     * @note Example base url: ibl.api.bbci.co.uk/ibl/v1/atoz/a/programmes?page=1
     */
    const BASE_URL = 'ibl.api.bbci.co.uk';
    const FIRST_PART = '/ibl/v1/atoz/';
    const SECOND_PART = '/programmes?page=';

    /**
     * @param $siteUrl
     * @return mixed
     */
    public function performRequest($siteUrl)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $siteUrl);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);

        $data = json_decode($response);

        return $data;

    }

    /**
     * @param $letter
     * @param int $page
     * @return string
     */
    public function buildUrl($letter, $page = 1)
    {
        return static::BASE_URL . static::FIRST_PART . $letter . static::SECOND_PART . $page;
    }

    /**
     * @param $letter
     * @param int $page
     * @return array
     */
    public function getProgrammeList($letter, $page = 1)
    {
        // get endpoint URL
        $url = $this->buildUrl($letter, $page);
        // get response from endpoint
        $response = $this->performRequest($url);
        // an array of all programmes
        $programmes = $response->atoz_programmes->elements;

        $numberOfPages = ceil($response->atoz_programmes->count / $response->atoz_programmes->per_page);
//        if ($programmes === []) {
//            return false;
//        }

        // create and array of all programme titles and image urls
        $programmeItems = array();
        foreach ($programmes as $programme) {
            $programmeItems[$programme->title] = $this->generateImageUrls($programme->images->standard);
        };
        $programmeItems['pages'] = $numberOfPages;

        return $programmeItems;
    }

    /**
     * @param $url
     * @return mixed
     *
     * sizes: 192x108, 406x228, 560x315
     * example image url: http://ichef.bbci.co.uk/images/ic/{recipe}/p017mqg6.jpg
     */
    public function generateImageUrls($url)
    {
        $urlNew['small'] = str_ireplace('{recipe}', '192x108' , $url);
        $urlNew['medium'] = str_ireplace('{recipe}', '406x228' , $url);
        $urlNew['large'] = str_ireplace('{recipe}', '560x315' , $url);
        return $urlNew;
    }
}
