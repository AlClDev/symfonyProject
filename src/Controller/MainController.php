<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main_controller')]
    public function index(Request $request): Response
    {
        // Création d'un array contenant des fruits
        $fruits = ['fraise', 'pomme', 'banane'];

        // affichage de cet array avec le dumper de Symfony
        dump($request);

        return $this->render('main_controller/index.html.twig');
    }
}
