<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class UserController
{
    #[Route('/')]
    public function homepage()
    {
        return new Response('<strong> Starshop</strong>: your monopoly-busting options for Starships parts ');
    }
}
