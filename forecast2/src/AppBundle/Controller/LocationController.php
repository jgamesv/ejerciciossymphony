<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LocationController extends Controller
{
    public function indexAction () {
        $this -> addFlash ('location','Your are located in Valladolid, Spain');
        return $this -> render('location/index.html.twig');
    }
}
