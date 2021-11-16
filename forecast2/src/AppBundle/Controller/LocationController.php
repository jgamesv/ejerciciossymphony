<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LocationController extends Controller
{
    public function indexAction () {
        $this -> addFlash ('location','Your are located in Valladolid, Spain');
        return $this -> render('location/index.html.twig');
    }
    public function indexJsonAction (){
        $response = new Response(json_encode(array('location'=> 'Tu estas localizado en Valladolid, Spain')));
        $response ->headers -> set('Content-type','text/json',true); //'application/json');
        return $response;
    }
}
