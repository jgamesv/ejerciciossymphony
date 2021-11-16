<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ForecastController extends Controller{
    public function indexAction (){
        return new Response("It's freezing cold");
    }
    public function indexParamAction ($param){
        return new Response("<html><body>Wheather info: It's ".$param."</body></html>");
    }
    public function index2ParamAction ($param,$temp){
        return new Response("<html><body>Wheather info: It's ".$param." and current temperature is: ".$temp.".</body></html>");
    }
    public function indexRequestAction ($param,$temp,Request $request){
        return new Response("<html><body>Wheather info in ".$request->query->get("city").": It's ".$param." and current temperature is: ".$temp."ºC.</body></html>");
    }
}
