<?php

namespace App\Controller;

use App\Entity\Technique;
use App\Form\TechniqueType;
use App\Repository\TechniqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/technique')]
class TechniqueController extends AbstractController
{
    #[Route('/', name: 'app_technique_index', methods: ['GET'])]
    public function index(TechniqueRepository $techniqueRepository): Response
    {
        return $this->render('technique/index.html.twig', [
            'techniques' => $techniqueRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_technique_new', methods: ['GET', 'POST'])]
    public function new(Request $request, TechniqueRepository $techniqueRepository): Response
    {
        $technique = new Technique();
        $form = $this->createForm(TechniqueType::class, $technique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $techniqueRepository->save($technique, true);

            return $this->redirectToRoute('app_technique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('technique/new.html.twig', [
            'technique' => $technique,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_technique_show', methods: ['GET'])]
    public function show(Technique $technique): Response
    {
        return $this->render('technique/show.html.twig', [
            'technique' => $technique,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_technique_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Technique $technique, TechniqueRepository $techniqueRepository): Response
    {
        $form = $this->createForm(TechniqueType::class, $technique);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $techniqueRepository->save($technique, true);

            return $this->redirectToRoute('app_technique_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('technique/edit.html.twig', [
            'technique' => $technique,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_technique_delete', methods: ['POST'])]
    public function delete(Request $request, Technique $technique, TechniqueRepository $techniqueRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $technique->getId(), $request->request->get('_token'))) {
            $techniqueRepository->remove($technique, true);
        }

        return $this->redirectToRoute('app_technique_index', [], Response::HTTP_SEE_OTHER);
    }
}
