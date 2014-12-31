<?php

namespace Info\cineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Info\cineBundle\Entity\Provinces;
use Info\cineBundle\Entity\Cities;
use Info\cineBundle\Entity\Movies;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{       
    /**
     * @Route("/add/{name}/{cities}", name="_add_province")
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
    
    /**
     * @Route("/add/{name}/{gender}/{director}/{year}/{description}", 
     * name="_add_movie")
     * @Template()
     */
    
    public function addMovieAction($name,$gender,$director,$year,$description)
    {
        $em = $this->getDoctrine()->getManager();
        $movie = new Movies();
        $movie->setName($name);
        $movie->setGender($gender);
        $movie->setDirector($director);
        $movie->setYear($year);
        $movie->setDescription($description);
        
        $em->persist($movie);
        $em->flush();
        
        return $this->render('cineBundle:Default:addMovie.html.twig',
                array ('name' =>$movie->getName(),'gender'=>$movie->getGender(),
                    'director'=>$movie->getDirector(),'year'=>$movie->getYear(),
                    'description'=>$movie->getDescription()));
        
    }
    
}
