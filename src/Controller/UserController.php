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
        $starshipsCount = 457;
        $myship=[
            "name" => "USS Leaf",
            "color" => "green",
            "status" => "MIA"
         ];

        return $this->render("main/homepage.html.twig", ["numberofStarships" => $starshipsCount, "myShip" =>  $myship,]);
        

    }
}