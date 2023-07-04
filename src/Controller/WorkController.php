<?php

namespace App\Controller;

use App\Entity\Work;
use App\Repository\WorkRepository;
use App\Repository\TechniqueRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class WorkController extends AbstractController
{
    #[Route('/work/{techniqueName?}', name: 'app_work_index', methods: ['GET'])]
    public function showByTechnique(
        ?string $techniqueName,
        TechniqueRepository $techniqueRepository,
        WorkRepository $workRepository
    ): Response {
        if (empty($techniqueName)) {
            $works = $workRepository->findAll();
        } else {
            $technique = $techniqueRepository->findOneByName($techniqueName);
            $works = $workRepository->findByTechnique($technique);
        }

        return $this->render('work/index.html.twig', [
            'works' => $works
        ]);
    }

    #[Route('/work/show/{id}', name: 'app_work_show', methods: ['GET'])]
    public function show(Work $work): Response
    {
        return $this->render('work/show.html.twig', [
            'work' => $work,
        ]);
    }
}
