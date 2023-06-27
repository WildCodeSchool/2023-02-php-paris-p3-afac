<?php

namespace App\Controller;

use App\Repository\TechniqueRepository;
use App\Repository\WorkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/technique')]
class TechniqueController extends AbstractController
{
    // #[Route('/', name: 'technique_index')]
    // public function index(TechniqueRepository $techniqueRepository): Response
    // {
    //     $techniques = $techniqueRepository->findAll();
    //     return $this->render('technique/index.html.twig', [
    //         'techniques'=>$techniques
    //     ]);
    // }
}
