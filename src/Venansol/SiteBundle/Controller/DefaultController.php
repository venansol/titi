<?php

namespace Venansol\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/index" ,name="index")
     */
    public function indexAction()
    {
        return $this->render('VenansolSiteBundle:Default:bibi.html.twig');
    }

    /**
     * @Route("/prof", name="prof")
     */
    public function profAction()
    {
        return $this->render('VenansolSiteBundle:Default:prof.html.twig');
    }

}
