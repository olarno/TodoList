<?php

namespace App\Controller\Api;

use App\Repository\CategoriesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

    /**
     * @Route("/api/categories", name="api_categories_")
     */

class CategoriesController extends AbstractController
{

    /**
    * @Route("/", name="browse")
    */
    public function index(CategoriesRepository $categoriesRepository, SerializerInterface $serializer)
    {
        $categories = $serializer->normalize($categoriesRepository->findAll(), null, ['groups' => 'category']);

        return $this->json([
        'categories' => $categories,
        ]);
    }

    /**
    * @Route("/{id}", name="read")
    */
    public function read()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/TasksController.php',
        ]);
    }

    /**
    * @Route("/{id}", name="edit")
    */
    public function edit()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/TasksController.php',
        ]);
    }

    /**
    * @Route("/", name="add")
    */
    public function add()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/TasksController.php',
        ]);
    }
    
    /**
    * @Route("/{id}", name="delete")
    */
    public function delete()
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/Api/TasksController.php',
        ]);
    }
}
