<?php
/**
 * Created by PhpStorm.
 * User: Radioactiveman
 * Date: 19.08.2018
 * Time: 13:41
 */
namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectController extends Controller {
    /**
     * @Route("/")
     */
    public function index() {
        //return new Response("<html><body>HELLO!!!</body></html>");
        return $this->render('projects/list.html.twig');
    }
}