<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController 
{
    #[Route("/api/horses")]
    public function getCollection(): Response
    {
        $horses = [
            [
                'name' => 'Iris',
                'class' => 'Race',
                'status' => 'Ready',
            ],
            [
                'name' => 'Bob',
                'class' => 'Farming',
                'status' => 'Ready',
            ],
            [
                'name' => 'Grace',
                'class' => 'Race',
                'status' => 'Ready',
            ],
        ]; 

        return $this->json($horses);
    }


}
