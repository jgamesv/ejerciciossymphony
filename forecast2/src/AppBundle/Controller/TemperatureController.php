<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class TemperatureController extends Controller
{
    public function getAction ($id){
    if ($id == null || $id != 1) {
        throw $this -> createNotFoundException('the registrer requested does not exist');
    }else {
            return new Response("Register". $id);
        }
    }
}
