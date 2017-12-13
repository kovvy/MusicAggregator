<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MainController extends Controller
{
    /** The method displays new songs
     *
     * @Route("/", name="main")
     */
    public function indexAction()
    {
        return $this->render('AppBundle:Main:index.html.twig', []);
    }

}
