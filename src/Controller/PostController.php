<?php

namespace App\Controller;

use App\Entity\Post;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\SerializerInterface;

class PostController extends AbstractController
{
    public function index(SerializerInterface $serializer, EntityManagerInterface $entityManager): JsonResponse
    {
        $temp = $entityManager->getRepository(Post::class)->findAll();
        $data = $serializer->serialize($temp, JsonEncoder::FORMAT);

        return new JsonResponse($data, Response::HTTP_OK, [], true);
    }

    public function create(SerializerInterface $serializer, EntityManagerInterface $entityManager, Request $request): JsonResponse
    {
        $post = new Post();
        $post->setTitle($request->get('title'));
        $post->setUser($request->get('user'));
        $post->setContent($request->get('content'));

        $entityManager->persist($post);
        $entityManager->flush();

        return new JsonResponse($serializer->serialize($post, JsonEncoder::FORMAT), Response::HTTP_OK, [], true);
    }
}
