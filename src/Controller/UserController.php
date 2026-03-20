<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ){}

    #[Route('/user', name: 'app_user')]
    public function index(): JsonResponse
    {
        $user = $this->entityManager->getRepository(User::class)->find(1);
        return $this->json([
            'id' => $user->getId(),
            'name' => $user->getName(),
            'age' => $user->getAge(),
        ]);
    }
}
