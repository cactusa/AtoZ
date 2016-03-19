<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AtoZController extends Controller
{
    /**
     * @Route("/a-z/{letter}", name="A to Z listing")
     */
    public function indexAction(Request $request, $letter)
    {
        $page = empty($request->query->get('page')) ? 1 : $request->query->get('page');
//        echo '<pre>';
//        print_r($page);
//        echo '</pre>';

//        $response = $this->get("http")->performRequest("ibl.api.bbci.co.uk/ibl/v1/atoz/" . $letter . "/programmes?page=1");
        $items = $this->get("http")->getProgrammeList($letter, $page);
        $numberOfPages = $items['pages'];
        unset($items['pages']);

        $letters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0-9');
        $links = array();
        foreach ($letters as $entry) {
            $links[$entry] = $this->generateUrl(
                'A to Z listing', array(
                    'letter' => $entry,
                )
            );
        };

        $pageLinks = array();
        for ($i = 1 ; $i <= $numberOfPages ; $i++) {
            $pageLinks[$i] = $this->generateUrl(
                'A to Z listing', array(
                    'letter' => $letter,
                    'page' => $i,
                )
            );
        }

        $prev = $this->generateUrl(
            'A to Z listing', array(
            'letter' => $letter,
            'page' => $page-1,
            )
        );

        $next = $this->generateUrl(
            'A to Z listing', array(
            'letter' => $letter,
            'page' => $page+1,
            )
        );

        return $this->render('atoz/index.html.twig', array(
            'letter' => $letter,
            'links' => $links,
            'items' => $items,
            'pages' => array(
                'list' => $pageLinks,
                'prev' => $page <= 1 ? false : $prev,
                'next' => $page >= $numberOfPages ? false : $next,
            ),
        ));
    }
}
