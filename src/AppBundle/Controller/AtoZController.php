<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AtoZController extends Controller
{
    /**
     * @Route("/a-z/{letter}", name="A to Z listing", defaults={"letter": "a"})
     */
    public function indexAction(Request $request, $letter)
    {
//        $response = $this->get("http")->performRequest("ibl.api.bbci.co.uk/ibl/v1/atoz/" . $letter . "/programmes?page=1");
        $items = $this->get("http")->getProgrammeList($letter);
//        echo '<pre>';
//        print_r($response);
//        echo '<pre>';

        $letters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0-9');

        $links = array();
        foreach ($letters as $item) {
            $links[$item] = $this->generateUrl(
                'A to Z listing',
                array('letter' => $item)
            );
        };

        // http://ichef.bbci.co.uk/images/ic/{recipe}/p017mqg6.jpg
        // 192x108, 406x228, 560x315

        return $this->render('atoz/index.html.twig', array(
            'letter' => $letter,
            'links' => $links,
            'items' => $items
        ));
    }
}
