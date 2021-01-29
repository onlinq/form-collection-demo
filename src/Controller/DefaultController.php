<?php

namespace App\Controller;

use App\Form\FruitsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index(): Response
    {
        $initialData = [
            'fruits' => ['Apple', 'Banana', 'Orange'],
        ];

        $form = $this->createForm(FruitsType::class, $initialData);

        return $this->render('default/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/basics", name="basic_usage")
     */
    public function basicUsage(): Response
    {
        $initialData = [
            'fruits' => ['Apple', 'Banana', 'Orange'],
        ];

        $form = $this->createForm(FruitsType::class, $initialData);

        return $this->render('default/basic_usage.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
