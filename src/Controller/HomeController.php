<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(TranslatorInterface $translator)
    {
        $translated = $translator->trans('Symfony is great');

        return $this->render('home/index.html.twig', [
            'translate' => $translated,
        ]);
    }
}
