<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function test(): Response
    {
        $number = random_int(0, 100);

        return $this->render('test.html.twig', [
            'number' => $number,
        ]);;
    }
}