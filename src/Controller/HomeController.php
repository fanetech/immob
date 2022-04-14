<?php 
namespace App\Controller ;

use App\Entity\Maison;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController{


    public function index(ManagerRegistry $r):Response{
        /*
        $m= new Maison();
        $m->setTitre("Ville F3");
        $m->setDescription("Superbe maison");
        $m->setSuperficie(300);
        $m->setChambres(2);
        $m->setPrix(3000000);
        $m->setClimatisation(true);
        $m->setVille("Bobo");
        $m->setAdresse("Avenue Sankara");
        $m->setEtage(1);
        $m->setDateCreation(new \DateTime());

        $em=$r->getManager();

        $em->persist($m);
        $em->flush(); 
        */



        return $this->render("home/index.html.twig");

    }
}