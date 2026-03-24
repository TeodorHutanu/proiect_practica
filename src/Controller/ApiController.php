<?php

namespace App\Controller;

use App\Repository\HorsesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{
    #[Route('/api/horses')]
    public function getCollection(HorsesRepository $repository): Response
    {
        $horses = $repository->findALL();

        return $this->json($horses);
    }
}
