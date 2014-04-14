<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeStoreBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function createAction()
	{
		$product = new Product();
		$product->setName('A Foo Bar');
		$product->setPrice('19.99');

		$dm = $this->get('doctrine_mongodb')->getManager();
		$dm->persist($product);
		$dm->flush();

		return new Response('Created product id '.$product->getId());
	}
}
