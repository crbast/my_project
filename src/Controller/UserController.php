<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(EntityManagerInterface $entityManager): JsonResponse
    {
        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        $temp2 = ['hello' => 'helo'];
        $temp2[1] = '';

        return new JsonResponse(json_decode($jsonobj));
    }
}
