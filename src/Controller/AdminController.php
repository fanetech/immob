<?php

namespace App\Controller;

use App\Entity\Maison;
use App\Form\MaisonType;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/admin/creer", name="admin_creer")
     */
    public function creerMaison(Request $request,ManagerRegistry $r): Response
    {

        $m=new Maison();
        $m->setDateCreation(new DateTime());

        $form= $this->createForm(MaisonType::class,$m);

        $form->handleRequest($request);

        if($form->isSubmitted()  && $form->isValid()){
    
            $m=$form->getData();

            $em=$r->getManager();

            $em->persist($m);
            $em->flush();

            //redirection
            $this->addFlash("success","Votre enregistrée est effecuté");

            return $this->redirectToRoute("admin");

        }

        return $this->render('admin/creermaison.html.twig',[
            "formulaire"=>$form->createView()
        ]);
    }
}
