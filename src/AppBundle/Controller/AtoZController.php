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
        // replace this example code with whatever you need
        return $this->render('atoz/index.html.twig', array(
            'testing' => 'tested',
            'letter' => $letter
        ));
    }
}
