<?php

namespace App\Controller;

use App\Entity\Maison;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaisonsController extends AbstractController
{
    /**
     * @Route("/maisons", name="maisons")
     */
    public function index(ManagerRegistry $r): Response
    {

        $maisonRepo=$r->getRepository(Maison::class);

        $maisons=$maisonRepo->findAll();

        return $this->render('maisons/index.html.twig', [
            'maisons'=>$maisons
        ]);
    }

    /**
     * @Route("/maisons/{id}", name="maisons_detail")
     */
    public function detail($id,ManagerRegistry $r){

        $maisonRepo=$r->getRepository(Maison::class);
        $m=$maisonRepo->find($id);

        return $this->render("maisons/detail.html.twig",[
            "house"=>$m
        ]);
    }
}
