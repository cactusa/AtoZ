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
        $pageNumber = empty($request->query->get('page')) ? 1 : $request->query->get('page');
        $items = $this->get("http")->getProgrammeList($letter, $pageNumber);
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

        $pageNumberLinks = array();
        for ($i = 1 ; $i <= $numberOfPages ; $i++) {
            $pageNumberLinks[$i] = $this->generateUrl(
                'A to Z listing', array(
                    'letter' => $letter,
                    'page' => $i,
                )
            );
        }

        $prev = $this->generateUrl(
            'A to Z listing', array(
            'letter' => $letter,
            'page' => $pageNumber-1,
            )
        );

        $next = $this->generateUrl(
            'A to Z listing', array(
            'letter' => $letter,
            'page' => $pageNumber+1,
            )
        );

        return $this->render('atoz/index.html.twig', array(
            'letter' => $letter,
            'links' => $links,
            'items' => $items,
            'pages' => array(
                'list' => $pageNumberLinks,
                'prev' => $pageNumber <= 1 ? false : $prev,
                'next' => $pageNumber >= $numberOfPages ? false : $next,
            ),
        ));
    }
}
