<?php

namespace App\Controller;

use App\Repository\WorkRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(WorkRepository $workRepository): Response
    {
        return $this->render('home/index.html.twig', [
            'works' => $workRepository->findBy([], null, 8)
        ]);
    }
}
