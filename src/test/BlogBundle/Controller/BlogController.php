<?php

// src/Sdz/BlogBundle/Controller/BlogController.php

namespace test\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use test\BlogBundle\Document\Article; // ajout de la ref de la class Article

class BlogController extends Controller
{
  public function indexAction($page)
  {
	if( $page < 1 )
	{
		throw $this->createNotFoundException('Page inexistante (page = '.$page.')');
	}
	
	$articles = array( // ceci est un test
    array(
      'titre'   => 'Mon weekend a Phi Phi Island !',
      'id'      => 1,
      'auteur'  => 'winzou',
      'contenu' => 'Ce weekend était trop bien. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Repetition du National Day de Singapour',
      'id'      => 2,
      'auteur' => 'winzou',
      'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Chiffre d\'affaire en hausse',
      'id'      => 3, 
      'auteur' => 'M@teo21',
      'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
      'date'    => new \Datetime())
  );
  
	 $product = $this->get('doctrine_mongodb')
        ->getRepository('testBlogBundle:Article')
		//$titre="UnTitre";
        ->findAll();
	
    return $this->render('testBlogBundle:Blog:index.html.twig', array('articles' => $product));
  }
  
  public function voirAction($id)
  {
	
	/*$article = array(
    'id'      => 1,
    'titre'   => 'Mon weekend a Phi Phi Island !',
    'auteur'  => 'winzou',
    'contenu' => 'Ce weekend était trop bien. Blabla…',
    'date'    => new \Datetime()
  );*/
  
	$article = $this->get('doctrine_mongodb')
        ->getRepository('testBlogBundle:Article')
		//$titre="UnTitre";
        ->find($id);
	
	return $this->render('testBlogBundle:Blog:voir.html.twig', array('article' => $article));
  }
  
 /* public function voirSlugAction($slug, $annee, $format)
  {
	return new Response("On pourrait afficher l'article correspondant au slug '".$slug."', créé en ".$annee." et au format ".$format.".");
  }
  */
  public function ajouterAction()
  {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :
    
    if( $this->get('request')->getMethod() == 'POST' )
    {
      // Ici, on s'occupera de la création et de la gestion du formulaire
      
      $this->get('session')->getFlashBag()->add('notice', 'Article bien enregistré');
    
      // Puis on redirige vers la page de visualisation de cet article
      return $this->redirect( $this->generateUrl('testblog_voir', array('id' => 5)) );
    }

    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('testBlogBundle:Blog:ajouter.html.twig');
  }
  
  public function modifierAction($id)
  {
    $article = $this->get('doctrine_mongodb')
        ->getRepository('testBlogBundle:Article')
		//$titre="UnTitre";
        ->find($id);

    return $this->render('testBlogBundle:Blog:modifier.html.twig', array('article' => $article));
  }

  public function supprimerAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id

    // Ici, on gérera la suppression de l'article en question

    return $this->render('testBlogBundle:Blog:supprimer.html.twig');
  }
  
  public function menuAction()
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    $liste = array(
      array('id' => 2, 'titre' => 'Mon dernier weekend !'),
      array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
      array('id' => 9, 'titre' => 'Petit test')
    );
        
    return $this->render('testBlogBundle:Blog:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
  }
}

?>