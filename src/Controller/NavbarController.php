<?php

namespace App\Controller;

use App\Form\SearchWorkType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NavbarController extends AbstractController
{
    #[Route('/navbar', name: 'navbar')]
    public function index(): Response
    {
        $form = $this->createForm(SearchWorkType::class, null, [
            'action' => $this->generateURL('app_work_search'),
            'method' => 'GET',
        ]);

        return $this->render('partials/_navbar.html.twig', [
            'form' => $form,
        ]);
    }
}
