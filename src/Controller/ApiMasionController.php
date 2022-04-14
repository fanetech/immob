<?php

namespace App\Controller;

use App\Repository\MaisonRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiMasionController extends AbstractController
{
    #[Route('/api/masion', name: 'api_masion')]
    public function index(MaisonRepository $repo): Response
    {
        $maisons = $repo->findAll();
        return $this->json($maisons);
    }
}
