<?php

namespace Info\cineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Info\cineBundle\Entity\Provinces;
use Info\cineBundle\Entity\Cities;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{       
    /**
     * @Route("/add/{name}/{cities}", name="_info_fake")
     * @Template()
     */
    public function addProvinceAction($name,$cities)
    {
        $em = $this->getDoctrine()->getManager();
         $provinces = new Provinces();
         $provinces->setName($name);
         $provinces->setCities($cities);
         
         $em->persist($provinces,$cities);
         $em->flush();
         
         return $this->render('cineBundle:Default:addProvince.html.twig', 
                 array('object' => $provinces->getName(),'other' => $provinces->getCities()));
    }
}
