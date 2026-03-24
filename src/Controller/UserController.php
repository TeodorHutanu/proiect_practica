<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController extends AbstractController
{
    #[Route("/")] 
    public function homepage(): Response 
    {
        $horses = 457;
        $myhorse=[
            "name" => "Dash",
            "color" => "Gray",
            "status" => "Injured"
         ];

        return $this->render("main/homepage.html.twig", [
            "numberofHorses" => $horses, 
            "myhorse" =>  $myhorse,]);
        

    }
}