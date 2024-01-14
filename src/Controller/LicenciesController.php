<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Licencie;

class LicenciesController extends AbstractController
{
    #[Route('/listeLicencies', name: 'listeLicencies')]
    public function listeLicencies(ManagerRegistry $doctrine)
    {
        $manager = $doctrine->getManager();
        $rep = $manager->getRepository(Licencie::class);
        $lesLicencies = $rep->listeLicencies();
        return $this->render('licencies/index.html.twig', Array('lesLicencies' => $lesLicencies));
    }
}
