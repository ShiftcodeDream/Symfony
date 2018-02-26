<?php

namespace Matt\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
    public function indexAction()
    {
//        return $this->render('MattPlatformBundle:Advert:index.html.twig');
        $content = $this->get('templating')->render(
            'MattPlatformBundle:Advert:index.html.twig',
            array('nom' => 'Matthias')
        );
        return new Response($content);
    }
    
    public function viewAction($id){
        return new Response("Affichage de l'annonce $id");
    }
    
}
