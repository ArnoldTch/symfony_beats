<?php

namespace App\Controller;

use App\Entity\Composition;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/compositions', name: 'app_compositions')]
    public function compositions(EntityManagerInterface $em): Response
    {
        // Récupérer les compositions depuis la base de données
        $compositions = $em->getRepository(Composition::class)->findAll();

        // Renvoyer la vue avec les compositions récupérées
        return $this->render('compositions/compositions.html.twig', [
            'compositions' => $compositions,
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('contact/contact.html.twig');
    }
}
