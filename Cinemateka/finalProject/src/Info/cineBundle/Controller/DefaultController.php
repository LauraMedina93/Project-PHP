<?php

namespace Info\cineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Info\cineBundle\Entity\Provinces;
use Info\cineBundle\Entity\Movies;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//these import the "@Security" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Info\cineBundle\Controller\SecurityController;

class DefaultController extends Controller {

    /**
     * @Route("/add/{name}/{cities}", name="_add_province")
     * @Template()
     */
    public function addProvinceAction($name, $cities) {
        $em = $this->getDoctrine()->getManager();
        $provinces = new Provinces();
        $provinces->setName($name);
        $provinces->setCities($cities);

        $em->persist($provinces, $cities);
        $em->flush();

        return $this->render('cineBundle:Default:addProvince.html.twig', array('object' => $provinces->getName(), 'other' => $provinces->getCities()));
    }

    /**
     * @Route("/admin/addMovie", name="_add_movie")
     * @Security ("is_granted('ROLE_ADMIN')")
     * @Template()
     */
    public function addMovieAction(Request $request) {

        $movie = new Movies();

        $form = $this->createFormBuilder($movie)
                ->add('Name', 'text')
                ->add('Gender', 'text')
                ->add('Year', 'text')
                ->add('Director', 'text')
                ->add('Description', 'textarea')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movie);
            $em->flush();

            $request->getSession()->getFlashBag()->set('notice', 'Movie Loaded!');

            return new RedirectResponse($this->generateUrl('_demo'));
        }
        return array('form' => $form->createView());
    }
    
    /**
     * @Route("/getMovies", name="_get_movies")
     * @Template()
     */
    public function getMoviesAction() {

        $em = $this->getDoctrine()->getManager();
        $movies = $em->getRepository('cineBundle:Movies')->findAll();
        return $this->render('cineBundle:Default:getMovies.html.twig', array(
            'movies' => $movies));
    }

}
