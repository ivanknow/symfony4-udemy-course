<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Service\Greeting;

class BlogController extends AbstractController
{
private $greeting;
    public function __construct(Greeting $greeting) {
        $this->greeting = $greeting;
    }
    /**
     * @Route("/", name="blog")
     */
    public function index(Request $request)
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'message'=>$this->greeting->greet($request->get('name'))
        ]);
    }
}
