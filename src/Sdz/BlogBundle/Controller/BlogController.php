<?php

// src/Sdz/Blogbundle/Controller/BlogController.php

namespace Sdz\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller {
    
    public function indexAction($page){
        if ($page<1){
            throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
        }
        return $this->render('SdzBlogBundle:Blog:index.html.twig', array('articles' => array()));
    }
    
    public function voirAction($id){
        return $this->render('SdzBlogBundle:Blog:voir.html.twig', array('id' => $id,));
    }
    
    public function ajouterAction (){
        if($this->get('request')->getMethod() == 'POST') {
            $this->get('session')->getFlashBag()->add('notice', 'Article bien enregistré');
            return $this->redirect( $this->generateUrl('sdzblog_voir', array('id'=>5)));
        }
        return $this->render('SdzBlogBundle:Blog:modifier.html.twig');
    }
    
    public function supprimerAction($id) {
        return $this->render('SdzBlogBundle:Blog:supprimer.html.twig');
    }
    
    public function menuAction($nombre) {
        $liste = array(
            array('id' => 2, 'titre' => 'Mon dernier weekend !'),
            array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
            array('id' => 9, 'titre' => 'Petit test')
         );
        
        return $this->render('SdzBlogBundle:Blog:menu.html.twig', array('liste_articles' => $liste));
    }
}

