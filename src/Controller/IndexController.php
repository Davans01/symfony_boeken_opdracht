<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Book;
use App\Form\BookType;
use App\Repository\BookRepository;
use BookController;

use App\Entity\Review;
use App\Form\ReviewType;
use App\Repository\ReviewRepository;
use ReviewController;

class IndexController extends AbstractController
{
    /**
     * @Route("", name="index")
     */
    public function index(BookRepository $bookRepository, ReviewRepository $reviewRepository): Response
    {
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'books' => $bookRepository->findAll(),
            'reviews' => $reviewRepository->findAll(),
        ]);
    }
}
