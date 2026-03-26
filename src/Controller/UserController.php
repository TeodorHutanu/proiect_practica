<?php

namespace App\Controller;

use App\Repository\HorsesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route('/')]
    public function homepage(HorsesRepository $horsesRepository): Response
    {
        $horses = $horsesRepository->findALL();

        $myhorse = $horses[array_rand($horses)];

        return $this->render('main/homepage.html.twig', [
            'myhorse' => $myhorse,
            'numberofHorses' => count($horses)]);
    }
    #[Route('/join', name: "app_join_game")]
    public function join() : Response{
        return $this->render("join/join.html.twig");
    }

}