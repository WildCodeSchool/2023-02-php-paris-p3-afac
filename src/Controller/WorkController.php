<?php

namespace App\Controller;

use App\Entity\Work;
use App\Form\WorkType;
use App\Repository\WorkRepository;
use App\Repository\TechniqueRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/work')]
class WorkController extends AbstractController
{
    #[Route('/work/technique/{techniqueName?}', name: 'app_work_index', methods: ['GET'])]
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

    #[Route('/', name: 'app_work_index', methods: ['GET'])]
    public function index(WorkRepository $workRepository): Response
    {
        return $this->render('work/index.html.twig', [
            'works' => $workRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_work_new', methods: ['GET', 'POST'])]
    public function new(Request $request, WorkRepository $workRepository): Response
    {
        $work = new Work();
        $form = $this->createForm(WorkType::class, $work);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $workRepository->save($work, true);

            return $this->redirectToRoute('app_work_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('work/new.html.twig', [
            'work' => $work,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_work_show', methods: ['GET'])]
    public function show(Work $work): Response
    {
        return $this->render('work/show.html.twig', [
            'work' => $work,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_work_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Work $work, WorkRepository $workRepository): Response
    {
        $form = $this->createForm(WorkType::class, $work);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $workRepository->save($work, true);

            return $this->redirectToRoute('app_work_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('work/edit.html.twig', [
            'work' => $work,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_work_delete', methods: ['POST'])]
    public function delete(Request $request, Work $work, WorkRepository $workRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $work->getId(), $request->request->get('_token'))) {
            $workRepository->remove($work, true);
        }

        return $this->redirectToRoute('app_work_index', [], Response::HTTP_SEE_OTHER);
    }
}
