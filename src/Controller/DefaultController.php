<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [ ]);
    }

    #[Route('/base', name: 'base-home')]
    public function base(): Response
    {
        return $this->render('base.html.twig', [ ]);
    }

    #[Route('/getter', name: 'getter')]
    public function getter(Request $request): Response
    {
        $name = $request->query->get('name', 'Default Name');
        return new Response("Name is: " . $name);
    }

    #[Route('/lower', name: 'lower')]
    public function lower(): Response
    {
        $text = strtoupper("Hello World");
        return $this->render('lower.html.twig', [
            'text' => $text,
        ]);
    }

    #[Route('/debug', name: 'debug')]
    public function debug(): Response
    {
        $array = ['veni', 'vidi', 'vici'];

        dd($array); # (dump and die)

        return new Response('Debugging');
    }
}
