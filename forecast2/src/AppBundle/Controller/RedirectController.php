<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;


class RedirectController extends Controller{
    public function indexAction (){
        return new Response("Redirect Satisfatory");
    }
    public function InternalRedirectAction (){
        return $this -> redirectToRoute("redirect_index");
    } 
    public function ExternalRedirectAction (){
        return $this -> redirect("https://parkwaydriverock.com");
    }
    public function InternalRedirectPermanentAction (){
        return $this -> redirectToRoute("redirect_index",array(),301);
    } 
}
