<?php

namespace MazeWorld\MoviesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MazeWorldMoviesBundle:Default:index.html.twig');
    }
}
