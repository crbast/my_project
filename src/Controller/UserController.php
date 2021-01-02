<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController extends AbstractController
{
    public function index(): JsonResponse
    {
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        $temp2 = ['hello' => 'helo'];
        $temp2[1] = '';

        return new JsonResponse(json_decode($jsonobj));
    }
}
