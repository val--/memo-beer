<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('test.html.twig', [
            'page_name' => 'home page',
        ]);
    }
}